<template>
    <div class="Container">

        <!--Este es el campo del Header-->
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
            <div class="grayBox"></div>
            <div class="clearfix"></div>

            <!--Aqui va el cuadro de bienvenida-->
            <div class="bienvenida">
                <h1>Bienvenido/as a mi mundo</h1>
                <h3>Designer UI/UX And Frontend Developer</h3>

            </div>
        </div>
        <!--Vamos a crear la seccion 'Sobre mi'-->

        <div class="SobreMi">

            <h1>Sobre mi</h1>
            <hr>
            <div class="parrafo">
                <p>Soy una joven decidida y activa, orientada a resultados, estoy dispuesta y al mismo tiempo muy motivada de empezar y formar parte de un equipo de trabajo, contando con total disposición de aprender cada día más y al mismo tiempo dar todo de mi para lograr los mejores resultados.</p>

            </div>
        </div>

        <!--Vamos a crear la seccion Proyectos-->

        <div class="proyectos">
            <h1>Proyectos</h1>
            <hr>
            <div class="caja1"></div>
            <div class="caja2"></div>
            <div class="caja3"></div>

        </div>

        <!--Habilidades-->
        <div class="habilidades">

        </div>

        <div class="contactos">

            <form action="">
                <input type="text" name="" v-model="contacts.Nombre" placeholder="Escriba su nombre" required="true">
                <input type="text" name="" id="segundo" placeholder="Escriba su correo">
                <input type="text" name="" id="tercero" placeholder="Escriba un mensaje">
                <input type="submit" v-on:click="Saludar(contacts.Nombre)" value="Enviar">
            </form>

        </div>

        <div class="copyright">
            <h3>2022 &COPY; Alina Marina Hermón Castro -Todos los derechos reservados</h3>
        </div>
    </div>


</template>

<script>
    export default{
        data(){
            return{

                contacts:{
                    Nombre: ''
                },
                tasks:[
                    {task:'Inicio'},
                    {task:'Sobre mi'},
                    {task:'Proyectos'},
                    {task: 'Habilidades'},
                    {task: 'Contactos'}

                ]
            }
        }, 
        methods:{
            Saludar(Nombre){
                alert("Gracias " + Nombre + " Su mensaje ha sido enviado exitosamente")
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
        display: block;
        background: rgba(0,0, 0, 0.6) url('../assets/CodeImg.png') no-repeat;
        background-size: cover;
        background-blend-mode: darken;
        height: 698.5px;
        width: 70%;
        float: left;
    }

    .grayBox{
        display: block;
        background-color: gray;
        height: 698.5px;
        width:30%;
        float: left;

    }

    .clearfix{
        float: none;
        clear:both
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

    /**Sobre mi */


    .SobreMi{
        padding-top: 40px;
        text-align: justify;
        padding-right: 400px;
    }

    .SobreMi h1{
        margin-left: 700px;
    }

    .SobreMi hr{
        margin-left: 700px;
        background-color: blue;
        border-bottom: blue solid 3px;
        width: 30px;
    }

    .SobreMi p {
        padding-left: 400px;
        padding-top: 30px;
        height: 150px;
    }

    /**Seccion Proyectos */


    .proyectos{
        background-color: black;
        height: 450px;
        padding-top:50px;
    }

    .proyectos h1{
        margin-left: 700px;
        color: white;
    }

    .proyectos hr{
        background-color: blue;
        border-bottom: blue solid 3px;
        margin-left: 700px;
        width: 40px;
        margin-bottom: 20px;
    }
    
    .proyectos > .caja1{
        display: block;
        color: blue;
        background-color: rgb(153, 60, 60);
        padding-top: 10px;
        width: 30%;
        height: 300px;
        margin-top: 30px;
        margin-left: 4%;
        float: left;
    }

    .proyectos > .caja2{
        display: block;
        color: blue;
        background-color: rgb(152, 104, 104);
        padding-top: 10px;
        width: 30%;
        height: 300px;
        margin-top: 30px;
        margin-left:1%;
        float: left;

    }

    .proyectos > .caja3{
        display: block;
        color: blue;
        background-color: rgb(255, 255, 255);
        padding-top: 10px;
        width: 30%;
        height: 300px;
        margin-top: 30px;
        margin-left:1%;
        float:left;

    }

    /**Habilidades */

    .habilidades{
        background-color: lightcyan;
        height: 800px;
    }

    /*Seccion Contactos */

    .contactos{
        background-color: rgb(15, 15, 167);
        height: 700px;
    }

    #primero {
                position: absolute;
        top:2600px;
        left: 75%;
        height: 40px;
        width: 250px;
        float: none;
    }

    #segundo{
        position: absolute;
        top:2600px;
        left: 75%;
        height: 40px;
        width: 300px;
        float: none;
    }

    #tercero{
        position: absolute;
        top:2750px;
        left: 75%;
        display: inline-block;
        height: 150px;
        width: 300px;
        float: none;
    }

    input[type='submit']{
        position: absolute;
        top: 2950px;
        left: 75%;
        font-size: 100%;
        width: 305px;
        height: 45px;
        border: none;
        background-color: #BA7B7C;
    }

    /**Copyrigth */

    .copyright{
        background-color: black;
        padding-top: 10px;
        height: 40px;
        text-align: center;
        color: white;
    }

</style>