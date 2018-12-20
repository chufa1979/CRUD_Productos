# CRUD de productos basado en **Laravel 5.5** y la plantilla **AdminLTE** basada en Bootstrap 3.

---

## Requerimientos

- [Composer](https://getcomposer.org/)
- [Requerimientos de Laravel 5.5](https://laravel.com/docs/5.5/installation#installation)
- [Node.js y NPM](https://nodejs.org/es/) (Opcional para trabajar y compilar  los assets con Laravel Mix)

---

## Paquetes y dependencias

A continuación el listado de tecnologías y plugins utilizados en este desarrollo.

### Back-end
- [Laravel 5.5](https://laravel.com/)
- [spatie/laravel-permission 2.7](https://github.com/spatie/laravel-permission)
- [nicolaslopezj/searchable 1.*](https://github.com/nicolaslopezj/searchable)
- [vinkla/hashids 3.3](https://github.com/vinkla/laravel-hashids)

### Front-end

- [Bootstrap 3.3.7](https://getbootstrap.com/docs/3.3/)
- [Jquery 3.2](https://jquery.com/)
- [Font Awesome 4.7.0](http://fontawesome.io/)
- [Admin-Lte 2.4.2](https://adminlte.io/)
- [jQuery-Autocomplete 1.4.4](https://github.com/devbridge/jQuery-Autocomplete)
- [toastr 2.1.2](http://codeseven.github.io/toastr/)
- [iCheck 1.0.2](http://icheck.fronteed.com/)
- [Pace 1.0.3](http://github.hubspot.com/pace/docs/welcome/)

---

## Front-end (Assets)

Los [componentes y plugins](https://adminlte.io/docs/2.4/dependencies) utilizados por la plantilla Admin Lte, así como otras incorporadas fueron instalas haciendo uso de **NPM** y compiladas posteriormente con Laravel Mix (Webpack) en los archivos **public/css/app.css** y **public/js/app.js**.

Si desea instalar nuevos plugins o agregar estilos personalizados o nuevos scripts javascript con este metodo, se necesita tener instalados **Node.js** con **NPM** establecer los plugins requeridos en el archivo **package.js** y modificar los archivos assets en **resources/assets** y posteriormente ejecutar:

```
cd laradmin
npm install
npm run dev o npm run prod
```

---

#### Créditos

Ruben Dario Vega