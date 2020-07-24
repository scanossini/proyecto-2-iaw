@extends('base')
<head>
    <title>Proyecto 3</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

@section('content')

<body>
    <div id="listDonantes"></div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

@endsection