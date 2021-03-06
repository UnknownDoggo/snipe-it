<?php

return array(

    'undeployable' 		=> '<strong>Atención: </strong> Este equipo está marcado como no isntalabre.
                        Si no es correcto, actualiza su estado.',
    'does_not_exist' 	=> 'Equipo inexistente.',
    'does_not_exist_or_not_requestable' => 'Buen intento. El activo no existe o no es solicitable.',
    'assoc_users'	 	=> 'Equipo asignado a un usuario, no se puede eliminar.',

    'create' => array(
        'error'   		=> 'Equipo no creado, intentalo de nuevo. :(',
        'success' 		=> 'Equipo creado. :)'
    ),

    'update' => array(
        'error'   			=> 'Equipo no actualizado, intentalo de nuevo',
        'success' 			=> 'Equipo actualizado.',
        'nothing_updated'	=>  'Ningún campo fue seleccionado, por lo que nada ha sido actualizado.',
    ),

    'restore' => array(
        'error'   		=> 'El equipo no fue restaurado, por favor intente nuevamente',
        'success' 		=> 'Equipo restaurado correctamente.'
    ),

    'audit' => array(
        'error'   		=> 'La auditoría de activos no tuvo éxito. Vuelve a intentarlo.',
        'success' 		=> 'Auditoría de activos registrada correctamente.'
    ),


    'deletefile' => array(
        'error'   => 'Archivo no eliminado. Por favor, vuelva a intentarlo.',
        'success' => 'Archivo eliminado correctamente.',
    ),

    'upload' => array(
        'error'   => 'Archivo(s) no cargado. Por favor, vuelva a intentarlo.',
        'success' => 'Archivo(s) cargado correctamente.',
        'nofiles' => 'No ha seleccionado ningun archivo para ser cargado, o el archivo que seleccionó es demasiado grande',
        'invalidfiles' => 'Uno o más sus archivos es demasiado grande o es de un tipo no permitido. Los tipos de archivo permitidos son png, gif, jpg, doc, docx, pdf y txt.',
    ),

    'import' => array(
        'error'                 => 'Algunos elementos no se pudieron importar correctamente.',
        'errorDetail'           => 'Estos elementos no pudieron importarse debido a errores.',
        'success'               => "Tu archivo ha sido importado",
        'file_delete_success'   => "Tu archivo ha sido eliminado con éxito",
        'file_delete_error'      => "No pudimos eliminar tu archivo",
    ),


    'delete' => array(
        'confirm'   	=> 'Estás seguro que quieres eliminar el equipo?',
        'error'   		=> 'Equipo no eliminado, intentalo de nuevo.',
        'nothing_updated'   => 'No se seleccionaron los activos, por lo que no se eliminó nada.',
        'success' 		=> 'Equipo eliminado.'
    ),

    'checkout' => array(
        'error'   		=> 'Equipo no asignado, intentalo de nuevo',
        'success' 		=> 'Equipo asignado.',
        'user_does_not_exist' => 'Este usuario es inválido. Por favor, inténtalo de nuevo.',
        'not_available' => '¡Ese equipo no está disponible para asignar!',
        'no_assets_selected' => 'Debes seleccionar al menos un equipo de la lista'
    ),

    'checkin' => array(
        'error'   		=> 'El equipo no pudo ser asignado, por favor inténtalo de nuevo',
        'success' 		=> 'El equipo fue asignado exitosamente.',
        'user_does_not_exist' => 'Es usuario es invalido, por favor inténtalo de nuevo.',
        'already_checked_in'  => 'El equipo ya ha sido devuelto.',

    ),

    'requests' => array(
        'error'   		=> 'El equipo no pudo ser solicitado, por favor inténtalo de nuevo',
        'success' 		=> 'El equipos fue solicitado exitosamente.',
        'canceled'      => 'La solicitud de asignación fue cancelada de forma exitosa'
    )

);
