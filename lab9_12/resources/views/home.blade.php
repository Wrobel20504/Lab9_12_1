<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Książki - Strona Główna</title>
    <!-- Możesz podpiąć style, np. Bootstrap, Tailwind, itp. -->
</head>
<body>


@if(Auth::check())
    <p>Jesteś zalogowany jako: {{ Auth::user()->name }}</p>
@else
    <p>Nie jesteś zalogowany. <a href="{{ route('login') }}">Zaloguj się</a></p>
@endif

@if(Auth::check())
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Wyloguj</button>
    </form>
@endif
<h1>Lista książek</h1>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tytuł</th>
        <th>Opis</th>
        <!-- Dodaj inne kolumny według potrzeb, np. Cena, Autor -->
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <!-- Jeśli masz powiązanego autora, można dodać: {{ $book->author->name ?? '' }} -->
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
