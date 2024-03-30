<?php

return array (
  'accepted' => 'El  debe ser aceptado.',
  'active_url' => 'El  no es una URL válida.',
  'after' => 'El  debe ser una fecha posterior a  :fecha.',
  'after_or_equal' => 'El  :atributo debe ser una fecha posterior o igual a :date',
  'alpha' => 'El :atributo sólo puede contener letras',
  'alpha_dash' => 'El :atributo sólo puede contener letras, números, guiones y guiones bajos',
  'alpha_num' => 'El :atributo sólo puede contener letras y números',
  'array' => 'El :atributo debe ser una matriz',
  'before' => 'El :atributo debe ser una fecha anterior a :fecha',
  'before_or_equal' => 'El :atributo debe ser una fecha anterior o igual a :fecha',
  'between' => 
  array (
    'array' => 'El :atributo debe tener entre :min y :max artículos',
    'file' => 'El :atributo debe estar entre :min y :max kilobytes',
    'numeric' => 'El :atributo debe estar comprendido entre :min y :max',
    'string' => 'El :atributo debe tener entre :min y :max caracteres',
  ),
  'boolean' => 'El campo :atributo debe ser verdadero o falso',
  'confirmed' => 'La confirmación del :atributo no coincide',
  'custom' => 
  array (
    'address_id' => 
    array (
      'required' => 'Por favor, seleccione su dirección.',
    ),
    'dinein_table_id' => 
    array (
      'required' => 'Por favor, seleccione su mesa.',
    ),
    'general_payment_error_action' => 
    array (
      'required' => 'El intento de pago ha fallado. Si es administrador del sistema, compruebe el problema en el proveedor de pagos.',
    ),
    'link_payment_error_action' => 
    array (
      'required' => 'No se ha encontrado el método de pago basado en enlaces.',
    ),
    'mollie_error_action' => 
    array (
      'required' => 'Error al obtener el enlace de pago.',
    ),
    'order_price' => 
    array (
      'min' => 'El pedido mínimo es :min. Por favor, añada algunos artículos más en el carrito',
    ),
    'paypal_payment_approval_missing' => 
    array (
      'required' => 'No hemos podido obtener el enlace de pago de PayPal.',
    ),
    'paypal_payment_error_action' => 
    array (
      'required' => 'El intento de pago ha fallado porque se requiere una acción adicional antes de que pueda completarse.',
    ),
    'paystack_error_action' => 
    array (
      'required' => 'Error en la comunicación con PayStack.',
    ),
    'stripe_payment_error_action' => 
    array (
      'required' => 'El intento de pago ha fallado porque se requiere una acción adicional antes de que pueda completarse.',
    ),
    'stripe_payment_failure' => 
    array (
      'required' => 'El intento de pago ha fallado por otros motivos, como no disponer de fondos. Compruebe los datos proporcionados.',
    ),
  ),
  'date' => 'El :atributo no es una fecha válida',
  'date_equals' => 'El :atributo debe ser una fecha igual a :fecha',
  'date_format' => 'El :atributo no coincide con el formato :formato',
  'different' => 'El :atributo y el :otro deben ser diferentes',
  'digits' => 'El :atributo debe ser :digits dígitos',
  'digits_between' => 'El :atributo debe estar entre los dígitos :min y :max',
  'dimensions' => 'El :atributo tiene dimensiones de imagen no válidas',
  'distinct' => 'El campo :atributo tiene un valor duplicado',
  'email' => 'El atributo debe ser una dirección de correo electrónico válida',
  'ends_with' => 'El :atributo debe terminar con uno de los siguientes: :valores.',
  'exists' => 'El :atributo seleccionado no es válido',
  'file' => 'El :atributo debe ser un archivo',
  'filled' => 'El campo :atributo debe tener un valor',
  'gt' => 
  array (
    'array' => 'El :atributo debe tener más elementos que :value',
    'file' => 'El :atributo debe ser mayor que :valor kilobytes',
    'numeric' => 'El :atributo debe ser mayor que :valor',
    'string' => 'El :atributo debe tener más caracteres que :valor',
  ),
  'gte' => 
  array (
    'array' => 'El :atributo debe tener :value o más elementos',
    'file' => 'El :atributo debe ser mayor o igual que :valor kilobytes.',
    'numeric' => 'El :atributo debe ser mayor o igual que :valor',
    'string' => 'El :atributo debe ser mayor o igual que :valor caracteres',
  ),
  'image' => 'El :atributo debe ser una imagen',
  'in' => 'El atributo seleccionado no es válido',
  'in_array' => 'El campo :atributo no existe en :otro',
  'integer' => 'El :atributo debe ser un número entero',
  'ip' => 'El :atributo debe ser una dirección IP válida',
  'ipv4' => 'El atributo debe ser una dirección IPv4 válida',
  'ipv6' => 'El atributo debe ser una dirección IPv6 válida',
  'json' => 'El atributo debe ser una cadena JSON válida.',
  'lt' => 
  array (
    'array' => 'El atributo debe tener menos de :valor elementos',
    'file' => 'El :atributo debe ser inferior a :valor kilobytes',
    'numeric' => 'El :atributo debe ser menor que :valor',
    'string' => 'El atributo :debe ser inferior a :valor caracteres',
  ),
  'lte' => 
  array (
    'array' => 'El atributo no debe tener más de :valor elementos',
    'file' => 'El :atributo debe ser menor o igual que :valor kilobytes',
    'numeric' => 'El :atributo debe ser menor o igual que :valor',
    'string' => 'El atributo :debe ser menor o igual a :valor caracteres',
  ),
  'max' => 
  array (
    'array' => 'El :atributo no puede tener más de :max elementos',
    'file' => 'El :atributo no puede ser mayor que :max kilobytes',
    'numeric' => 'El :atributo no debe ser mayor que :max.',
    'string' => 'El :atributo no puede ser mayor que :max caracteres',
  ),
  'mimes' => 'El :atributo debe ser un archivo de tipo: :values',
  'mimetypes' => 'El :atributo debe ser un archivo de tipo: :values',
  'min' => 
  array (
    'array' => 'El atributo debe tener al menos :min elementos',
    'file' => 'El atributo debe ser como mínimo :min kilobytes',
    'numeric' => 'El atributo debe ser como mínimo :min.',
    'string' => 'El atributo debe ser como mínimo :min caracteres',
  ),
  'multiple_of' => 'El atributo debe ser un múltiplo de :valor',
  'not_in' => 'El atributo seleccionado no es válido',
  'not_regex' => 'El formato del atributo no es válido',
  'numeric' => 'El atributo debe ser un número',
  'password' => 'La contraseña es incorrecta.',
  'present' => 'El campo del atributo debe estar presente',
  'regex' => 'El formato del atributo no es válido',
  'required' => 'El campo atributo es obligatorio',
  'required_if' => 'El campo atributo es obligatorio cuando :other es :value',
  'required_unless' => 'El campo atributo es obligatorio a menos que :other esté en :values',
  'required_with' => 'El campo atributo es obligatorio cuando :values está presente',
  'required_with_all' => 'El campo atributo es obligatorio cuando :valores están presentes',
  'required_without' => 'El campo atributo  es obligatorio cuando :values no está presente',
  'required_without_all' => 'El campo atributo es obligatorio cuando ninguno de los valores está presente',
  'same' => 'El atributo y otro deben coincidir',
  'size' => 
  array (
    'array' => 'El atributo debe contener :tamaño elementos.',
    'file' => 'El atributo debe ser :tamaño kilobytes',
    'numeric' => 'El atributo debe ser :tamaño',
    'string' => 'El atributo debe ser :tamaño caracteres',
  ),
  'starts_with' => 'El atributo debe empezar con uno de los siguientes: :valores',
  'string' => 'El atributo debe ser una cadena',
  'timezone' => 'El atributo debe ser una zona válida.',
  'unique' => 'El atributo ya ha sido ocupado',
  'uploaded' => 'El atributo no se pudo cargar',
  'url' => 'El formato del atributo no es válido',
  'uuid' => 'El atributo debe ser un UUID válido',
);
