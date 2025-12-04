<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Balasan dari BALAI BESAR</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; color:#333; line-height:1.6;">
  <div style="max-width:600px; margin:0 auto; padding:20px;">
    <h2 style="color:#0b5ed7;">Balasan dari BALAI BESAR</h2>

    <p>Halo {{ $original->name }},</p>

    <p>{{ $replyBody }}</p>

    <hr>
    <p style="font-size:13px; color:#555;"><strong>Pesan Anda (kutipan):</strong></p>
    <blockquote style="border-left:3px solid #eee; margin:0; padding-left:10px; color:#555;">
      <p><strong>Subjek:</strong> {{ $original->subject }}</p>
      <p>{{ $original->message }}</p>
    </blockquote>

    <p style="font-size:13px; color:#666; margin-top:18px;">Jika Anda perlu tindak lanjut lebih lanjut, balas email ini atau hubungi kami melalui telepon.</p>

    <p style="font-size:12px; color:#999;">&copy; {{ date('Y') }} BALAI BESAR</p>
  </div>
</body>
</html>
