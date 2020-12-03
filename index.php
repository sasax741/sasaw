  <?php include('includes/head.html');
   include('includes/menu.html');?>
        <main class="contenedor">
            <div id="Sobrenosotros"></div>
            <section id="Sobrenosotros2">
                <h2 class="titulo">SOBRE NOSOTROS</h2>
                <div class="Sobrenosotroshijo">
                    <div class="ioc">
                        <img src="imagenes/yo.jpeg" class="io">
                    </div>
                    <div class="contenedormua">
                        <h3><span>Técnico Programador Luis Sanchez</span></h3>
                        <p>¡Hola! Soy luis, soy desarrollador web Full Stack y lider del equipo SASAW.
                          ¿No estas cansado de pagar cantidades dolarizadas sin saber cuánto estas pagando realmente? ¡Nosotros somos la solución!
                          En SASAW somos emprendedores como vos y por eso queremos ayudarte, dandote una solución local y de alta calidad.
                            <br> Somos un grupo de pibes técnicos con muchas ganas de desarollar tu sitio web por una suma justa. <br>
                            <b>DE EMPRENDORES PARA EMPRENDEDORES.</b>
                        </p>
                    </div>
                </div>
            </section>
            <div id="NuestroServi"></div>
            <section id="NuestroServi2">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="contenedorsobre">
                    <div class="imgSobre">
                        <img src="imagenes/img1.svg" class="imgs">
                    </div>
                    <div class="contenidoTextos">
                        <div class="titu"><span>1</span><h3>Creación de sitios web</h3></div>
                        <p>Nada es mejor para tu negocio que darle presencia digital,
                           ya sea un pequeño emprendimiento o para tu local establecido.<br>
                            Con nosotros tenes la solución, presencia en internet de alta calidad a un buen precio. <br>  </p>
                        <div class="titu"><span>2</span><h3>Soporte y mantenimiento</h3></div>
                        <p>Las sitios web necesitan mantenimiento constante o se quedan en el tiempo.
                          Si contratas nuestro combo de soporte y mantenimiento no solo te asegurás de que tu sitio funcione en óptimas condiciones,
                          también te asegurás un experto a tu disposición para cualquier problema o duda que se te presente.
                        </p>
                    </div>
                </div>
            </section>
            <div id="servicios"></div>
            <section id="servicios2">
                <div class="contenedorProdu">
                    <h2 class="titulo">Nuestros Productos</h2>
                    <div class="produCont">
                        <div class="servicioInd">
                            <img src="imagenes/sitio.svg" class="imgp" >
                            <h3>SITIO WEB</h3>
                            <p>Creación de un sitio web para presentación de una idea, local o emprendimiento.</p>
                        </div>
                        <div class="servicioInd2">
                            <img src="imagenes/eccomerce.svg" class="imgp" >
                            <h3>E-COMMERCE</h3>
                            <p>Creación de un e-commerce 100% funcional a medida con detalles, colores a elección  y adaptable para dispositivos móviles.</p>
                        </div>
                        <div class="servicioInd3">
                            <img src="imagenes/blog.svg" class="imgp" >
                            <h3>BLOG</h3>
                            <p>Creación de un blog con para explayar un contenido completamente funcional. </p>
                        </div>
                    </div>
                </div>
            </section>
            <div id="contapadre"></div>
            <section id="contapadre2">
                <h2 class="titulo">Contactanos</h2>
                <div class="conta">
                    <div class="imgconta">
                        <img src="imagenes/contactanos.svg" class="imgcont">
                    </div>
                    <div id="contadiv" class="">
                        <form action="mensaje/envio.php" method="post" class="contahijo" >
                            <label for="nombre">Nombre y apellido</label>
                            <input type="text" name="nombre" id="nombre" >
                            <label for="mail">Ingrese su mail</label>
                            <input type="email" name="mail" id="mail" >
                            <label for="producto">Seleccione el producto que le interesa</label>
                            <select name="producto" id="producto">
                                <option value="sitio">Sitio web</option>
                                <option value="ecomerce">E-commerce</option>
                                <option value="blog">Blog</option>
                                <option value="mantenimiento">Mantenimiento</option>
                            </select>
                            <label for="detalle">Detalle la consulta sobre el producto</label>
                            <textarea name="detalle" id="detalle" cols="30" rows="8"></textarea>
                            <input type="submit" name="enviar">
                        </form>
                    </div>
                </div>
            </section>
            <div>  </div>
        </main>
        <a class="appWhatsapp" target="_blanck"  href="https://api.whatsapp.com/send?phone=+5491123964896&text=¡Hola!&nbsp;Me&nbsp;gustaria&nbsp;emprender&nbsp;de&nbsp;manera&nbsp;digital&nbsp;con&nbsp;ustedes.&nbsp;:)">
            <img src="imagenes/whatsapp.svg">
        </a>
    <?php include('includes/footer.html') ?>
