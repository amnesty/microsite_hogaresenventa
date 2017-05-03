<?php
session_start();

/***********************
*     CONSTANTES       *
***********************/

//ESTABLECE LA URL DEL SITE para construir las URLs y usarlas en Redes Sociales y Meta Etiquetas
if ( strpos ( $_SERVER['SERVER_NAME'], "amnistia.bit" )) {
	define("URL_SITE",     "http://dev.amnistia.bit/hogaresenventa/"); // Servidor Local estrés
} elseif ( strpos ( $_SERVER['SERVER_NAME'], "estresarte.com" ) ) {
	define("URL_SITE",     "http://testing.estresarte.com/amnistia/hogaresenventa/"); // Producción estrés
} else {
	define("URL_SITE",     "https://www.es.amnesty.org/hogaresenventa/"); // Producción Amnistía
}

//Links to CRM Amnistía
define("URL_SOCIO", "https://crm.es.amnesty.org/unete-no-se-vende/?origen=nosevende");
define("URL_DONA", "https://crm.es.amnesty.org/donacion-no-se-vende/?origen=nosevende");


//Trackeado de enlaces con UTM de Google Analytics
define ("TRACK_FB_UTM", "?utm_source=facebook&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-facebook");
define ("TRACK_TW_UTM", "?utm_source=twitter&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-twitter");
define ("TRACK_WH_UTM", "?utm_source=whatsapp&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-whatsapp");

//Se usa para calcular el % de firmas para rellenar la "Progress Bar" en "/includes/firma-form.php"
//En <div class="progress-wrap-firmas progress-firmas" data-progress-percent="20">
//EL valor de "data-progress-percent" (0-100) hará que se rellena la progress bar con el valor indicado

//Para calcular el valor, es necesario sabnerl el nº de firmas que se llevan en cada momento, meidante una consulta SQL a la base de datos.
//Luego se calucla esto: data-progress-percent =   (nº firmas / NUM_FIRMAS_TOTAL )*100
define ("NUM_FIRMAS_TOTAL", "5000");


/* Short URL Twitter */
// https://www.es.amnesty.org/hogaresenventa/?utm_source=twitter&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-twitter
define ("SL_HOME_TW", "https://goo.gl/rRLg9I");

// https://www.es.amnesty.org/hogaresenventa/paula/?utm_source=twitter&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-twitter 
// FIX ElENA por PAULA, pero no cambio el nombre de variable
define ("SL_ELENA_TW", "https://goo.gl/UzYkw8");

// https://www.es.amnesty.org/hogaresenventa/lucia/?utm_source=twitter&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-twitter
define ("SL_LUCIA_TW", "https://goo.gl/HjFZ94");


/* Short URL Whatsapp */
// https://www.es.amnesty.org/hogaresenventa/?utm_source=whatsapp&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-whatsapp
define ("SL_HOME_WH", "https://goo.gl/NYkJZV");

// https://www.es.amnesty.org/hogaresenventa/paula/?utm_source=whatsapp&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-whatsapp
// FIX ElENA por PAULA, pero no cambio el nombre de variable
define ("SL_ELENA_WH", "https://goo.gl/MFMvr8");

// https://www.es.amnesty.org/hogaresenventa/lucia/?utm_source=whatsapp&utm_campaign=comp&utm_medium=social_com&utm_term=living%20in%20dignity&utm_content=Web_petition-hogaresenventa-whatsapp
define ("SL_LUCIA_WH", "https://goo.gl/pk1Ozp");



/***********************
*     FUNCIONES        *
***********************/

// BOOLEAN PARA DETERMINAR SI SE VISITIA EL SITE DESDE DISPOSITIVO MÓVIL (Mostrat / Ocultar Whatsapp)
$isMobile = false;
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
	$isMobile = true;
}

//RECIBE PARAMETROS DE CAMPAÑAS GOOGLE Y FACEBOOK. LOS ASIGNAMOS A LA SESSION RESPECTIVAMENTE PARA NO PERDERLOS
if(isset($_GET['pk_campaign'])) {
	$_SESSION['pk_campaign'] = $_GET['pk_campaign'];
}
if(isset($_GET['utm_campaign'])) {
	$_SESSION['utm_campaign'] = $_GET['utm_campaign'];
}


//setcookie("cookieAlert3", 1, time() + 60*60*24*365); //NO DESCOMENTAR ES UNA PRUEBA

?>