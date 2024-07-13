<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Datos de envio - ElectroMall</title>
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
                <a class="nav-link" href="index.html" aria-current="page"
                  >Home <span class="visually-hidden">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="escritorio.html">Escritorio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sobremi.html">Sobre mi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contacto.html">Contacto</a>
              </li>
            </ul>
            <div class="d-flex my-2 my-lg-0">
              <ul class="menu-login">
                <li>
                  <a href="login.html" class="login">
                    <i class="bi bi-box-arrow-in-right"></i>Login</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main class="main-producto">
      <div class="container-fluid bg-3 text-center">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-2 sidenav">
            <h4>Productos mas vendidos</h4>
            <div class="img-prod-relacionados">
              <p>Notebook</p>
              <img
                src="https://www.cetrogar.com.ar/media/catalog/product/p/c/pcbpx_5.jpg?width=500&height=500&canvas=500,500&quality=80&bg-color=255,255,255&fit=bounds"
                alt=""
              />
            </div>
            <div class="img-prod-relacionados">
              <p>Notebook</p>
              <img
                src="https://www.cetrogar.com.ar/media/catalog/product/c/m/cm3106.jpg?width=500&height=500&canvas=500,500&quality=80&bg-color=255,255,255&fit=bounds"
                alt=""
              />
            </div>
            <div class="img-prod-relacionados">
              <p>Notebook</p>
              <img
                src="https://http2.mlstatic.com/D_NQ_NP_821300-MLA31118311494_062019-O.webp"
                alt=""
              />
            </div>
          </div>
          <div class="col-lg-8 text-left text-descript-centro-sobremi">
            <h2>Datos de envio</h2>
            <div class="contacto-container">
              <p>Verifiaar los datos de envio</p>

              <form
                class="row g-3 form-registro"
                novalidate=""
                action="pago.html"
                method="get"
              >
                <div class="col-md-4 position-relative">
                  <label for="validationTooltip01" class="form-label"
                    >First name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="validationTooltip01"
                    value="Mark"
                    required=""
                  />
                  <div class="valid-tooltip">Looks good!</div>
                </div>
                <div class="col-md-4 position-relative">
                  <label for="validationTooltip02" class="form-label"
                    >Last name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="validationTooltip02"
                    value="Otto"
                    required=""
                  />
                  <div class="valid-tooltip">Looks good!</div>
                </div>
                <div class="col-md-4 position-relative">
                  <label for="validationTooltipUsername" class="form-label"
                    >Username</label
                  >
                  <div class="input-group has-validation">
                    <span
                      class="input-group-text"
                      id="validationTooltipUsernamePrepend"
                      >@</span
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="validationTooltipUsername"
                      aria-describedby="validationTooltipUsernamePrepend"
                      required=""
                    />
                    <div class="invalid-tooltip">
                      Please choose a unique and valid username.
                    </div>
                  </div>
                </div>
                <div class="col-md-6 position-relative">
                  <label for="validationTooltip03" class="form-label"
                    >City</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="validationTooltip03"
                    required=""
                  />
                  <div class="invalid-tooltip">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3 position-relative">
                  <label for="validationTooltip04" class="form-label"
                    >State</label
                  >
                  <select
                    class="form-select"
                    id="validationTooltip04"
                    required=""
                  >
                    <option selected="" disabled="" value="">Choose...</option>
                    <option>...</option>
                  </select>
                  <div class="invalid-tooltip">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-3 position-relative">
                  <label for="validationTooltip05" class="form-label"
                    >Zip</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="validationTooltip05"
                    required=""
                  />
                  <div class="invalid-tooltip">Please provide a valid zip.</div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">
                    Submit form
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-2 sidenav">
            <h4>Productos relacionados</h4>
            <div class="img-prod-relacionados">
              <p>Notebook</p>
              <img
                src="https://www.cetrogar.com.ar/media/catalog/product/p/c/pcbpx_5.jpg?width=500&height=500&canvas=500,500&quality=80&bg-color=255,255,255&fit=bounds"
                alt=""
              />
            </div>
            <div class="img-prod-relacionados">
              <p>Notebook</p>
              <img
                src="https://www.cetrogar.com.ar/media/catalog/product/c/m/cm3106.jpg?width=500&height=500&canvas=500,500&quality=80&bg-color=255,255,255&fit=bounds"
                alt=""
              />
            </div>
            <div class="img-prod-relacionados">
              <p>Notebook</p>
              <img
                src="https://http2.mlstatic.com/D_NQ_NP_821300-MLA31118311494_062019-O.webp"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="container-fluid text-center">
      <a href="aviso.html">Aviso de privacidad</a>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
