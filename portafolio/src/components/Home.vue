<template>
    <div class="Container">
        <div class="header">

            <!--Este es el navegador-->
            <div class="menu">
                <img src="../assets/Recurso 2.png" alt="Logo">
                <ul>                
                <a href="#"><li v-for="tareas in tasks">
                {{tareas.task}}</li></a>
            </ul>
            </div>

            <!--Este es la imagen de portada-->
            <div class="img"></div>

            <!--Aqui va el cuadro de bienvenida-->
            <div class="bienvenida">
                <h1>Bienvenido/as a mi mundo</h1>
                <h3>Designer UI/UX And Frontend Developer</h3>

            </div>


        </div>
    </div>


</template>

<script>
    export default{
        data(){
            return{
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

    .header .menu img{
        padding-top: 9px;
        padding-left: 30px;
        position: absolute;
        height: 120px;
        width: 190px;
    }
    .header .menu{
        background-color: #BA7B7C;
        height: 90px;
        width: 100%;
    }

    ul{
        padding-top: 32px;
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

    .img {
        background: rgba(0,0, 0, 0.6) url('../assets/CodeImg.png') no-repeat;
        background-size: cover;
        background-blend-mode: darken;
        height: 698.5px;
        width: 70%;
    }

    .bienvenida{
        position: absolute;
        top: 638px;
        left: 20px;
        height: 120px;
        width: 47%;
        border: white solid 5px;
    }
    
    .bienvenida h1{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        padding-left: 20%;
        padding-top: 15px;
        font-size: 35px;
        color: white;
    }

    .bienvenida h3{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        color: gray;     
        padding-top: 10px;
        padding-left: 23%;
    }

    


</style>