<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="register_proses">
            @csrf
            <div>
                <label for="name">Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old("name") }}"
                    autocomplete="name"
                    autofocus
                />
                @error("name")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old("email") }}"
                    autocomplete="email"
                />
                @error("email")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    autocomplete="new-password"
                />
                @error("password")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    autocomplete="new-password"
                />
            </div>

            <button type="submit">Register</button>
        </form>
    </body>
</html>
