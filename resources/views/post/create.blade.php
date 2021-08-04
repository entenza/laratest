<style>
    .fila {
        padding-bottom: 1rem;
    }
    .alert {
        color: red;
    }
</style>
<h2>Formulario</h2>
<form action="/post"  method="POST">
    @csrf
    <div class="fila">
        <span><label for="titulo">Titulo:</label></span>
        
        <input id="titulo" type="text" name="titulo" placeholder="Entre el titulo" value="{{ old('titulo') }}">
        @error('titulo')
            <div class="alert ">{{ $message }}</div>
        @enderror
    </div>
    <div class="fila">
        <span><label for="nombre">Nombre:</label></span>
        <input id="nombre" type="text" name="nombre" placeholder="Entre el nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <div class="alert ">{{ $message }}</div>
        @enderror
    </div>
    <div class="fila">
        <span><label for="email">Email:</label></span>
        <input id="email" type="text" name="email" placeholder="Entre el Email" value="{{ old('email') }}">
        @error('email')
            <div class="alert ">{{ $message }}</div>
        @enderror
    </div>
    <div class="fila">
        <span><label for="continente">Continente:</label></span>
        <select name="continente" id="continente">
            <option value="">----</option>
            <option <?php echo old('continente') == 'Am' ? 'selected' : ''; ?> value="Am">America</option>
            <option <?php echo old('continente') == 'E' ? 'selected' : ''; ?> value="E">Europa</option>
            <option <?php echo old('continente') == 'As' ? 'selected' : ''; ?> value="As">Asia</option>

        </select>
        @error('continente')
            <div class="alert ">{{ $message }}</div>
        @enderror
    </div>
    <div class="fila">
        <span><label for="publicado">Publicado:</label></span>
        <input type="checkbox" name="publicado" <?php
            echo old('publicado') == 'on' ? 'checked' : '';
        ?> >
    </div>
    <div class="fila">
        <button>Guardar Post</button>
    </div>
</form>
