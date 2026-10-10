<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
        body { margin: 0; min-height: 100vh; display: flex; align-items: center; justify-content: center;
               background: #0f172a; font-family: system-ui, sans-serif; color: #e5e7eb; }
        .card { width: 100%; max-width: 380px; background: #1e293b; padding: 28px; border-radius: 10px; }
        h1 { margin: 0 0 20px; font-size: 22px; text-align: center; }
        label { display: block; margin: 14px 0 6px; font-size: 14px; }
        input { width: 100%; box-sizing: border-box; padding: 10px; border-radius: 6px;
                border: 1px solid #334155; background: #0f172a; color: #e5e7eb; }
        button { margin-top: 20px; width: 100%; padding: 10px; border: 0; border-radius: 6px;
                 background: #e5e7eb; color: #0f172a; font-weight: 600; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Login</h1>
        <form>
            <label for="email">Email</label>
            <input id="email" type="email" name="email">
            <label for="password">Password</label>
            <input id="password" type="password" name="password">
            <button type="button">Log in</button>
        </form>
    </div>
</body>
</html>