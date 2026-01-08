# Dynamic Navigation System - Admin Quick Reference

## Access the Admin Interface

1. **Log in** to `/admin/dashboard`
2. Navigate to **Menu Items** in the sidebar (if added), or visit directly: `/admin/menu-items`

## Admin Interface URLs

| Page | URL | Purpose |
|------|-----|---------|
| Menu List | `/admin/menu-items` | View all menus, edit, delete, paginated |
| Create Menu | `/admin/menu-items/create` | Create new menu item |
| Edit Menu | `/admin/menu-items/{id}/edit` | Modify existing menu item |
| Delete Menu | `/admin/menu-items/{id}` (DELETE) | Delete a menu item |

## Menu Item Fields

### Title (Required)
- Display name for the menu item
- Shown in navbar/footer to visitors
- Example: "Pengujian", "Kalibrasi", "Laporan"

### Location (Required)
Choose where the menu appears:
- **navbar** - Main navigation bar (desktop dropdown + mobile drawer)
- **footer_layanan** - Footer "Layanan" section
- **footer_standar** - Footer "Standar Pelayanan" section
- **footer_media** - Footer "Media & Informasi" section
- **footer_tentang** - Footer "Tentang Kami" section

### Parent Menu (Optional)
- Leave blank for top-level items
- Select a parent to create sub-menus
- Creates dropdown menus in navbar
- Self-references are automatically filtered out

### Slug (Optional)
- URL-friendly identifier
- Example: "pengujian", "laporan-tahunan"
- If set and no URL provided: creates link like `url('/pengujian')`
- Leave blank if using custom URL

### URL (Optional, Priority)
- Custom link destination
- Takes priority over slug if both are set
- Example: `https://example.com`, `/custom-page`, `/admin/dashboard`
- Leave blank to use slug-based URL generation

### Sort Order
- Number (0, 1, 2, ...) determining menu display order
- Lower numbers appear first
- Used for ordering items within same parent/location

### Is Active (Checkbox)
- ✓ Checked = Menu item visible
- ☐ Unchecked = Menu item hidden
- Useful for temporarily hiding menus without deleting

### Open in New Tab (Checkbox)
- ✓ Checked = Link opens in new tab/window (`target="_blank"`)
- ☐ Unchecked = Link opens in same window
- Recommended for external links

## Typical Use Cases

### Create a Service Link in Navbar
1. Go to `/admin/menu-items/create`
2. **Title**: "Audit Teknologi"
3. **Location**: navbar
4. **Parent Menu**: "Layanan"
5. **Slug**: "audit-teknologi"
6. **Sort Order**: 11 (or appropriate position)
7. **Is Active**: ✓ Checked
8. Save

### Create an External Link in Footer
1. Go to `/admin/menu-items/create`
2. **Title**: "Government Portal"
3. **Location**: footer_media
4. **URL**: https://portal.gov.id
5. **Open in New Tab**: ✓ Checked
6. **Sort Order**: 5
7. **Is Active**: ✓ Checked
8. Save

### Hide a Menu Temporarily
1. Go to `/admin/menu-items`
2. Find the menu item row
3. Click Edit
4. Uncheck "Is Active"
5. Save
6. Item will no longer appear on website

### Create a Dropdown Menu
1. Create a parent item (no Parent Menu selected):
   - Title: "Layanan Baru"
   - Location: navbar
   - Sort Order: 10
   - Is Active: ✓

2. Create child items with Parent Menu = "Layanan Baru":
   - Title: "Sub Layanan 1"
   - Parent Menu: "Layanan Baru"
   - Sort Order: 0
   
   - Title: "Sub Layanan 2"
   - Parent Menu: "Layanan Baru"
   - Sort Order: 1

## Data Display Flow

```
┌─────────────────────────────────┐
│   ViewComposer (MenuComposer)   │
│   Runs on every page load       │
└──────────────┬──────────────────┘
               │
               ├─→ Queries navbar items (6 parents + 27 children)
               ├─→ Queries footer_layanan (1 parent + 9 children)
               ├─→ Queries footer_standar (1 parent + 5 children)
               ├─→ Queries footer_media (4 items)
               └─→ Queries footer_tentang (7 items)
               
               Shares as variables:
               - $navbarMenus
               - $footerLayanan
               - $footerStandar
               - $footerMedia
               - $footerTentang
               
┌──────────────┴──────────────────┐
│   Blade Templates               │
├─────────────────────────────────┤
│   navbar.blade.php              │  
│   footer.blade.php              │
│   (other views)                 │
└─────────────────────────────────┘
        │
        └─→ Render dynamic HTML to visitor's browser
```

## Database Queries (for developers)

### Get all navbar items with children
```php
$navbarMenus = MenuItem::where('location', 'navbar')
    ->whereNull('parent_id')
    ->where('is_active', true)
    ->orderBy('sort_order')
    ->with(['children' => function($q) {
        $q->where('is_active', true)->orderBy('sort_order');
    }])
    ->get();
```

### Get footer section with children
```php
$footerLayanan = MenuItem::where('location', 'footer_layanan')
    ->whereNull('parent_id')
    ->where('is_active', true)
    ->with(['children' => function($q) {
        $q->where('is_active', true)->orderBy('sort_order');
    }])
    ->first();
```

### Generate URL for menu item (using accessor)
```php
$menuItem->full_url  // Returns: URL or generated slug-based path
```

## Troubleshooting

### Menu items not showing
- ✓ Check "Is Active" is checked
- ✓ Verify "Location" is set correctly
- ✓ For navbar dropdowns, ensure parent item exists and is active
- ✓ Clear browser cache if recently changed

### Dropdown menus not expanding (mobile)
- Issue: Alpine.js not initialized
- Solution: Ensure `alpinejs@3` is loaded in layout
- Check browser console for JavaScript errors

### URL generation not working
- Priority order: 1) `url` field 2) `slug` field 3) `#`
- Ensure at least one is filled
- Test URL format (e.g., no spaces, proper URL encoding)

### Parent menu not appearing in dropdown
- Filter excludes: inactive items, items from wrong location, self-references
- Verify parent is in same location (navbar parent only links navbar children)
- Check parent "Is Active" is checked

## Database Direct Query (MySQL/MariaDB)

### View all menus
```sql
SELECT id, title, location, parent_id, sort_order, is_active 
FROM menu_items 
ORDER BY location, sort_order;
```

### View navbar structure
```sql
SELECT id, title, parent_id, sort_order 
FROM menu_items 
WHERE location = 'navbar' 
ORDER BY parent_id, sort_order;
```

### Temporarily hide section
```sql
UPDATE menu_items 
SET is_active = 0 
WHERE location = 'footer_media' 
AND parent_id IS NULL;
```

## Performance Notes

- **Caching**: ViewComposer queries run on every page load
- **Optimization**: For high-traffic sites, add route caching: `php artisan route:cache`
- **Query Count**: ~5-10 database queries total for all menus
- **Load Time**: <50ms typical for menu data retrieval

## Backup & Migration

### Backup current menu structure
```bash
php artisan tinker
Menu::all()->toJson() | copy to file
```

### Export menus to CSV
```php
$menus = MenuItem::all();
$csv = \Storage::disk('local')->get('menus.csv');
```
