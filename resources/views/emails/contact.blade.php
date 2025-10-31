<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan Kontak Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #2563eb;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f8fafc;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #374151;
        }
        .field-value {
            margin-top: 5px;
            padding: 10px;
            background-color: white;
            border-radius: 4px;
            border-left: 4px solid #2563eb;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Pesan Kontak Baru</h1>
        <p>BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET</p>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="field-label">Nama Lengkap:</div>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">{{ $data['email'] }}</div>
        </div>
        
        @if($data['phone'])
        <div class="field">
            <div class="field-label">Telepon:</div>
            <div class="field-value">{{ $data['phone'] }}</div>
        </div>
        @endif
        
        @if($data['company'])
        <div class="field">
            <div class="field-label">Perusahaan:</div>
            <div class="field-value">{{ $data['company'] }}</div>
        </div>
        @endif
        
        <div class="field">
            <div class="field-label">Subjek:</div>
            <div class="field-value">{{ $data['subject'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Pesan:</div>
            <div class="field-value">{{ $data['message'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Tanggal:</div>
            <div class="field-value">{{ now()->format('d M Y H:i') }}</div>
        </div>
    </div>
</body>
</html>
