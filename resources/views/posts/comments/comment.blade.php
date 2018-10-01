<hr>

@if (auth()->check())

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form" action="{{ route('comment.store') }}" method="post">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <div class="form-group">
            <input type="text" name="title" placeholder="Título" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="body" rows="5" cols="30" placeholder="Comentário" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-dark">Enviar</button>
        </div>
    </form>
@else
    <p>É necessário estar <b>Autenticado</b> para fazer comentários. Clique <a class="btn btn-default" href="{{ route('login') }}">Aqui</a> para fazer login! </p>
@endif
