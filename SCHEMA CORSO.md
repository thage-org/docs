# SCHEMA CORSO
```
corso = {
  "title" => string
  "author" => string
  "date" => date(dd/mm/YY)
  "description" => string
  "difficulty_level" => string
  "requirements" => string
  "tags" => array di stringhe
  "contents" => array di contenuti
  "conclusions" => {
    "content" => string
    "more" => array di approfondimenti
  }
}
```

# SCHEMA CONTENUTO - LEZIONE
```
contenuto = {
  "id" => int
  "title" => string
  "type" => "lesson"
  "content" => string
}
```

# SCHEMA CONTENUTO - TEST
```
contenuto = {
  "id" => int
  "title" => string
  "type" => "test"
  "text" => string
  "options" => array di opzioni
  "correct_id" => int
}
```

# SCHEMA OPZIONE DOMANDA
```
contenuto = {
  "id" => int
  "title" => string
  "text" => string
}
```

# SCHEMA APPROFONDIMENTO (va implementato successivamente l'approfondimento come documento caricato da utente)
```
contenuto = {
  "id" => int
  "title" => string
  "type" => "url"
  "url" => string
}
```
