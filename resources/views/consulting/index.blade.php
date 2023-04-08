<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <form method="POST" action="{{ route('consulting.store') }}">
          @csrf
      
          <div>
              <label for="name">Nama:</label>
              <input type="text" name="name" id="name" required>
          </div>
      
          <div>
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" required>
          </div>
      
          <div>
              <label for="message">Pesan:</label>
              <textarea name="message" id="message" required></textarea>
          </div>
      
          <button type="submit">Kirim</button>
      </form>
        
      </section>
</body>
</html>