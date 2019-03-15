<div class="container">
  {{header}}
  {{menu}}
  <main>
    <h1>Configuración</h1>
    <p>El archivo de configuración <code>app/config/config.json</code> es un archivo JSON con pares clave/valor con los que configurar la aplicación que se quiere crear. Todos los campos son opcionales, por lo que se podría dejar el archivo sin valores (por ejemplo <code>{}</code>), pero conviene configurarlos para una experiencia más personalizada. Estos son los posibles parámetros:</p>
    <div class="data-table">
      <div class="data-header data-row">
        <div class="data-param">Parámetro</div>
        <div class="data-default">Valor por defecto</div>
        <div class="data-explanation">Explicación del parámetro</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">base_modules</div>
        <div class="data-long"><code>base_modules</code> sirve para indicar si se quieren cargar varias herramientas opcionales que ofrece el framework.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">browser</div>
        <div class="data-default">false</div>
        <div class="data-explanation">Habilita la clase <code>OBrowser</code> con funciones para detección de navegador, versiones... Se basa en el <code>user agent</code> del usuario que accede a la aplicación.</div>
      </div>
      <div class="data-row">
        <div class="data-param">email</div>
        <div class="data-default">false</div>
        <div class="data-explanation">Habilita la clase <code>OEmail</code> con funciones para realizar envíos de emails (usa la función <code>mail()</code> de PHP).</div>
      </div>
      <div class="data-row">
        <div class="data-param">email_smtp</div>
        <div class="data-default">false</div>
        <div class="data-explanation">En caso de que el valor del parámetro sea <code>true</code>, al usar la clase <code>OEmail</code>, los envíos se realizaran por el protocolo SMTP, en vez de usar la función <code>mail()</code> de PHP. Es necesario incluir la librería (no incluida) PHPMailer. Es necesario configurar los datos de la cuenta de correo a usar en el campo <code>smtp</code>.</div>
      </div>
      <div class="data-row">
        <div class="data-param">ftp</div>
        <div class="data-default">false</div>
        <div class="data-explanation">Habilita la clase <code>OFTP</code> con funciones para realizar llamadas FTP a servidores remotos.</div>
      </div>
      <div class="data-row">
        <div class="data-param">image</div>
        <div class="data-default">false</div>
        <div class="data-explanation">Habilita la clase <code>OImage</code> con funciones para tratamiento de imágenes.</div>
      </div>
      <div class="data-row">
        <div class="data-param">pdf</div>
        <div class="data-default">false</div>
        <div class="data-explanation">Habilita la clase <code>OPDF</code> con funciones para generar archivos PDF dinámicamente. Es necesario incluir la librería (no incluida) <code>TCPDF</code>.</div>
      </div>
      <div class="data-row">
        <div class="data-param">translate</div>
        <div class="data-default">false</div>
        <div class="data-explanation">Habilita el uso de traducciones en la aplicación. Ver <a href="/es/traducciones">Traducciones</a>.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">packages</div>
        <div class="data-default">[]</div>
        <div class="data-explanation">Indica los paquetes opcionales a incluir en el framework. Ver <a href="/es/paquetes">Paquetes</a>.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">db</div>
        <div class="data-long"><code>db</code> sirve para indicar la configuración de la base de datos a usar.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">host</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Nombre de host o URL de la base de datos a usar. Por ejemplo <code>localhost</code> o una dirección IP.</div>
      </div>
      <div class="data-row">
        <div class="data-param">user</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Nombre de usuario con el que acceder a la base de datos.</div>
      </div>
      <div class="data-row">
        <div class="data-param">pass</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Contraseña del usuario con el que acceder a la base de datos.</div>
      </div>
      <div class="data-row">
        <div class="data-param">name</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Nombr de la base de datos a la que conectarse.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">cookies</div>
        <div class="data-long">En el caso de que se quieran usar cookies personalizadas, <code>cookies</code> sirve para configurarlas.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">prefix</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">En el caso de que varias aplicaciones compartan un mismo dominio, mediante un prefijo se puede hacer que las cookies de la aplicación no colisionen con otras de otra aplicación.</div>
      </div>
      <div class="data-row">
        <div class="data-param">url</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Dominio en el que serán validas las cookies. Hay que indicar un punto antes del dominio, por ejemplo <code>.osumi.es</code>.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">debug</div>
        <div class="data-default">false</div>
        <div class="data-explanation">Indica si se quiere habilitar el registro de depuración. En caso de habilitarse se registrarán las consultas realizadas, logs personalizados... que se escribirán en el archivo <code>logs/debug.log</code>.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">base_url</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Indica la dirección completa de la aplicación, por ejemplo <code>https://framework.osumi.es/</code>.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">admin_email</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Indica la dirección email del creador de la aplicación. Se muestra en las páginas de error no personalizadas.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">default_title</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Título por defecto que se incluira en el campo HTML <code>title</code> de cada página. Se puede configurar en cada acción para mostrar uno personalizado.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">lang</div>
        <div class="data-default">es</div>
        <div class="data-explanation">Código de idioma por defecto en caso de querer usar <a href="/es/traducciones">traducciones</a>. Se usa en caso de que el usuario que accede a la aplicación tenga un idioma no contemplado en las traducciones.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">smtp</div>
        <div class="data-long">Datos para el envío de emails mediante SMTP (en caso de que el parámetro <code>base_modules/smtp</code> sea <code>true</code>).</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">host</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Nombre de dominio o dirección IP del servidor de correo. Por ejemplo <code>smtp.gmail.com</code>.</div>
      </div>
      <div class="data-row">
        <div class="data-param">port</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Puerto al que conectarse al realizar el envío. Por ejemplo en el caso de Google sería el <code>587</code>.</div>
      </div>
      <div class="data-row">
        <div class="data-param">secure</div>
        <div class="data-default">tls</div>
        <div class="data-explanation">Tipo de cifrado usado al realizar el envío de datos al servidor de correo.</div>
      </div>
      <div class="data-row">
        <div class="data-param">user</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Usuario con el que se realizará el envío de emails.</div>
      </div>
      <div class="data-row">
        <div class="data-param">pass</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">Contraseña del usuario con el que se realizará el envío de emails.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">error_pages</div>
        <div class="data-long">Sirve para configurar páginas personalizadas en el caso de errores de servidor.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">403</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">URL a la que redirigir en el caso de un error 403 (error de autenticación)</div>
      </div>
      <div class="data-row">
        <div class="data-param">404</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">URL a la que redirigir en el caso de un error 404 (página no encontrada)</div>
      </div>
      <div class="data-row">
        <div class="data-param">500</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">URL a la que redirigir en el caso de un error 500 (error interno del servidor)</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">css</div>
        <div class="data-default">[]</div>
        <div class="data-explanation">Lista con los archivos CSS que se incluirán. Solo hay que poner el nombre del archivo y el framework lo rellenará. Por ejemplo poniendo <code>"common"</code>, el framework incluirá el archivo <code>common.css</code> de la carpeta <code>web/css</code>.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">ext_css</div>
        <div class="data-default">[]</div>
        <div class="data-explanation">Lista con los archivos CSS EXTERNOS que se incluirán. En este caso hay que indicar la URL completa del archivo que se quiere incluir, por ejemplo una URL de Google Fonts.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">js</div>
        <div class="data-default">[]</div>
        <div class="data-explanation">Lista con los archivos JS que se incluirán. Solo hay que poner el nombre del archivo y el framework lo rellenará. Por ejemplo poniendo <code>"jquery"</code>, el framework incluirá el archivo <code>jquery.js</code> de la carpeta <code>web/js</code>.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">ext_css</div>
        <div class="data-default">[]</div>
        <div class="data-explanation">Lista con los archivos JS EXTERNOS que se incluirán. En este caso hay que indicar la URL completa del archivo que se quiere incluir, por ejemplo la URL de jQuery del CDN.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">extra</div>
        <div class="data-default">{}</div>
        <div class="data-explanation">Este campo permite guardar valores personalizados mediante pares clave/valor. Por ejemplo <code>"numero_articulos_por_pagina": 10</code>.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">libs</div>
        <div class="data-default">[]</div>
        <div class="data-explanation">Lista con las librerías de terceros que se incluirán en el framework. Por ejemplo <code>"another/library"</code> incluiría el archivo <code>library.php</code> de la carpeta <code>ofw/library/another</code>. En caso de que estas librerías no se encuentren la carga se detiene y se muestra un error indicando que el archivo no se ha encontrado.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">dir</div>
        <div class="data-default">{}</div>
        <div class="data-explanation">Lista de directorios personalizados. El framework tiene una lista de directorios a los que se puede acceder para consulta, pero el usuario puede definir los suyos propios. Por ejemplo <code>"thumb_dir": "web/img/thumb"</code>. En este campo se puede añadir las claves de directorios previamente definidos indicándolos entre dos llaves. Por ejemplo, el caso anterior mejor definido sería <code>"thumb_dir": "{{web}}img/thumb"</code> donde <code>{{web}}</code> se sustituiría con la ruta al directorio <code>web</code> del framework.</div>
      </div>
      <div class="data-divider"></div>
      <div class="data-row">
        <div class="data-param">environment</div>
        <div class="data-default">(no tiene)</div>
        <div class="data-explanation">La configuración del sitio se realiza en el archivo <code>config.json</code>, pero se pueden crear archivos "secundarios" basados en entornos. Por ejemplo, si se indicase <code>"environment": "dev"</code>, tras la carga del archivo de configuración, se cargaría el archivo <code>config.dev.json</code>. Estos archivos secundarios pueden contener los mismos parámetros y sustituirán a los del archivo principal. De este modo se puede tener la configuración de un sitio de prueba en un archivo y del sitio en producción en otro, y realizar la carga de uno u otro simplemente cambiando el valor de este parámetro.</div>
      </div>
      <div class="data-divider"></div>
    </div>

    <div class="previous-next">
      <a href="/es/estructura" class="previous">Estructura</a>
      <a href="/es/urls" class="next">URLs</a>
    </div>
  </main>
  {{footer}}
</div>