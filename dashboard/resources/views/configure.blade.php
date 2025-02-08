<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configure Button</title>
</head>
<body>
    <h1>Configure Button {{ $button->cell_number }}</h1>

    <form method="POST" action="{{ route('button.saveConfiguration', $button->id) }}">
        @csrf
        <div>
            <label for="hyperlink">Hyperlink:</label>
            <input type="text" name="hyperlink" value="{{ old('hyperlink', $button->hyperlink) }}" placeholder="Enter hyperlink (optional)">
        </div>
        <div>
            <label for="color">Button Color:</label>
            <input type="color" name="color" value="{{ old('color', $button->color) }}">
        </div>
        <button type="submit">Save Configuration</button>
    </form>

    <a href="/">Back to Dashboard</a>
</body>
</html>
