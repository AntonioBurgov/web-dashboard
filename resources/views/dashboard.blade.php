<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>

body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0f0f0;
}

.grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    width: 80%;
    max-width: 600px;
}

.button-cell {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    aspect-ratio: 1;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s, box-shadow 0.2s;
}

.button-cell:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.button-cell button {
    padding: 20px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    border: none;
    width: 100%;
    height: 100%;
    background: linear-gradient(145deg, #0f0401, #ff9068);
    color: white;
    border-radius: 10px;
    text-align: center;
    box-shadow: inset 2px 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, box-shadow 0.3s;
}

.button-cell button:hover {
    background: linear-gradient(145deg, #ff9068, #ff4b1f);
    box-shadow: inset 2px 2px 4px rgba(0, 0, 0, 0.15), 0 4px 8px rgba(0, 0, 0, 0.1);
}


a {
    text-decoration: none;
}

    </style>
</head>
<body>
    <div class="grid">
        @foreach ($buttons as $button)
            <div class="button-cell" style="background-color: {{ $button->color }}">
                @if ($button->hyperlink)
                    <a href="{{ $button->hyperlink }}" target="_blank">
                        <button>{{ $button->cell_number }}</button>
                    </a>
                @else
                    <a href="{{ route('button.configure', $button->id) }}">
                        <button>Configure</button>
                    </a>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
