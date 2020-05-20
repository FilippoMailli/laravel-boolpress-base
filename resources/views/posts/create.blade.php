<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CREATE</title>
    </head>
    <body>
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="">
                <label for="title">TITOLO</label>
                <input type="text" placeholder="Inserisci il titolo" name="title">
            </div>
            <div class="">
                <label for="title">Testo</label>
                <textarea name="body" rows="10" cols="30" placeholder="Inserisci il testo"></textarea>
            </div>
            <div class="">
                <label for="title">Autore</label>
                <input type="text" placeholder="Inserisci il nome dell'autore" name="author">
            </div>
            <div class="">
                <label for="title">Location</label>
                <input type="text" placeholder="Inserisci la tua posizione" name="location">
            </div>
            <div class="">
                <label for="title">Immagine</label>
                <input type="text" placeholder="Inserisci il path" name="img">
            </div>
            <div class="">
                <label for="not-published">Non pubblicato</label>
                <input type="radio" id="not-published" name="published" value="0">
                <label for="published">Pubblicato</label>
                <input type="radio" id="published" name="published" value="1">
            </div>
            <div class="">
                <input type="submit" value="Salva">
            </div>
        </form>
    </body>
</html>
