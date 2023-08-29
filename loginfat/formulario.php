<link rel="stylesheet" href="./style.css">
<form action="welcome.php">
    <button type=´submit´>ATRAS</button>
</form>

<form action ="conexion.php" method = "POST">
<div class="form">
    <h4>ingresa los datos siguientes para su compra</h4>
    <div>
        <label>nombre</label>
        <input type="text" name="nombre" placeholder="nombre"required>
    </div>

    <div>
        <label >apellido</label>
        <input type="text" name="apellido" placeholder="apellido"required>
    </div>
    
    <div>
        <label >telefono</label>
        <input type="text" name="telefono" placeholder="telefono"required>
    </div>

    <div>
        <label >email</label>
        <input type="text" name="email" placeholder="email"required>
    </div>

    <div>
        <button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
        <button type="reset">Reaser</button>
    </div>
</div>
</form>     