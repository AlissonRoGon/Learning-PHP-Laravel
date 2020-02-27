@auth
    <form id="logout-form" action="/logout" method="POST">
        {{ csrf_field() }}
        <div style="padding-left: 50px; padding-top:25px;">
            <button type="submit">Sair </button>
        </div>
    </form>
@else
<div style="padding-left: 50px;">
    <a href="/login">Login</a>
    <a href="/register">Register</a>
</div>
    
@endauth