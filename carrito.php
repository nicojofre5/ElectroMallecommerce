<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ElectroMall - Tienda</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/main.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php" aria-current="page"
                  >Home <span class="visually-hidden">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="escritorio.php">Escritorio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sobremi.php">Sobre mi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php">Contacto</a>
              </li>
            </ul>
            <div class="d-flex my-2 my-lg-0">
              <ul class="menu-login">
                <li>
                  <a href="login.php" class="login">
                    <i class="bi bi-box-arrow-in-right"></i>Login</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="cont-carrito">
        <h2>Carrito</h2>
        <div class="sub_carrito">
          <a href="">Inicio</a><a href="">Carrito</a>
        </div>
        <div class="container">
          <div class="producto_carrito row">
            <div class="col-img-producto col-lg-2">
              <h3>Producto</h3>
              <picture class="img-prod-carrito">
                <img src="https://img.freepik.com/vector-premium/dibujos-animados-productos-supermercado_24640-55628.jpg" alt="" />
              </picture>
            </div>
            <div class="col-dsc-producto col-lg-4">
              <h3>Descripcion</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
                impedit cupiditate soluta magni cumque culpa perspiciatis
                aperiam dolore autem, dignissimos distinctio, veniam quaerat
                itaque ab! Repellendus ipsa veniam modi quisquam. Ratione nemo
                esse praesentium possimus. Veritatis consequatur explicabo
           
              </p>
            </div>
            <div class="col-cant-producto col-lg-1">
              <h3>Cant</h3>
              <p>1</p>
            </div>
            <div class="col-precio-producto col-lg-2">
              <h3>Precio</h3>
              <p>$150.00</p>
            </div>
            <div class="col-subtotal-producto col-lg-2">
              <h3>Subtotal</h3>
              <p>$150.00</p>
            </div>
            <div class="col-borrar-producto col-lg-1">
              <h3>Borrar</h3>
              <a href="" class="btn-danger">Borrar</a>
            </div>
          </div>
        </div>
        <div class="cont-precio-carrito">
          <div class="precio-carrito">
            <div class="precioc1">
              <p>Subtotal:</p>
              <p>$150.00</p>
            </div>
            <div class="precioc1">
              <p>Costo de envío:</p>
              <p>$150.00</p>
            </div>
            <div class="precioc1">
              <p>Descuento:</p>
              <p>$150.00</p>
            </div>
            <div class="precioc1">
              <p>Total:</p>
              <p>$150.00</p>
            </div>
            <div class="cont-btn-carrito">
              <a href="" class="btn-primary">Seguir comprando</a>
              <a href="" class="btn-primary">Recalcular</a>
              <a href="" class="btn-success">Pagar</a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="container-fluid text-center">
      <p>Todos los derechos reservados &copy;</p>
      <div class="">
        <form action="" class="d-flex justify-content-center form-buscar">
          <label for="" class="label-buscar">Buscar</label>
          <input
            type="text"
            name="buscar"
            id="buscar"
            class="form-control input-search"
            placeholder="Buscar un producto"
          />
          <button type="button" class="btn btn-info btn-ir">Ir</button>
        </form>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
