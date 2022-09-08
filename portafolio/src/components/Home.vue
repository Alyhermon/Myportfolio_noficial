<template>
    <div class="Container">
        <div class="header">
            <div class="menu">
                <ul>                
                <a href="#"><li v-for="tareas in tasks">
                {{tareas.task}}</li></a>
            </ul>

            </div>

        </div>
    </div>


</template>

<script>
    export default{
        data(){
            return{
                Hello: 'Hola Vue js', 
                Usuario:{
                    Nombre: '<h1>Alexander</h1>',
                    Chica: 'Alina'
                }, 
                showname: true, 
                tasks:[
                    {task:'Inicio'},
                    {task:'Sobre mi'},
                    {task:'Proyectos'},
                    {task: 'Habilidades'},
                    {task: 'Contactos'}

                ]
            }
        }

    }

</script>

<style media="screen">
    .header .menu{
        background-color: #BA7B7C;
        height: 90px;
        width: 100%;
    }

    ul{
        padding-top: 30px;
        margin-left: 900px;
        list-style: none;
    }

    .menu ul li {
        color: white;
        font-size: 20px;
        display: block;
        padding-left: 20px;
        float: left;
    }

    ul li a {
        text-align: none;
    }

    


</style>