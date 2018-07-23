<style>
    @import url(https://fonts.googleapis.com/css?family=Ubuntu);
html,body{
  height:100%
}
body {
  background: #112 url("{{asset('assets/dist/img/back404.jpg')}}"); top center no-repeat;
  background-size:cover;
  margin:0
}
.logo {
  text-align: center;
  width: 65%;
  height: 250px;
  margin: auto;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.logo b{
  font: 100 15vh "Vibur";
  color: #fee;
  text-shadow: 0 -40px 100px, 0 0 2px, 0 0 1em #03A2E2, 0 0 0.5em #03A2E2, 0 0 0.1em #ff4444, 0 10px 3px #000;
}
.logo b span{
  animation: blink linear infinite 2s;
}
@keyframes blink {
  78% {
    color: inherit;
    text-shadow: inherit;
  }
  79%{
     color: #333;
  }
  80% {
    
    text-shadow: none;
  }
  81% {
    color: inherit;
    text-shadow: inherit;
  }
  82% {
    color: #333;
    text-shadow: none;
  }
  83% {
    color: inherit;
    text-shadow: inherit;
  }
  92% {
    color: #333;
    text-shadow: none;
  }
  92.5% {
    color: inherit;
    text-shadow: inherit;
  }
}
</style>
<div class="logo"><b>Error<span> 404</span><br>Page not found!<span></span></b></div>