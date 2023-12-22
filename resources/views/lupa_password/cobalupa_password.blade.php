<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="{{ route("password.email") }}">
            @csrf

            <div>
                <label for="email">Alamat Email</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old("email") }}"
                    required
                    autofocus
                />
            </div>

            <button type="submit">Kirim Link Reset Password</button>
        </form>

        @if (session("success"))
            <script>
                alert("{{ session("success") }}");
            </script>
        @elseif (session("error"))
            <script>
                alert("{{ session("error") }}");
            </script>
        @endif
    </body>
</html>
