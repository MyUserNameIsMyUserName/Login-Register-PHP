<div class="loadingScreen animated_bars">


<div id="vignette"></div>
<div id="container">
  <div id="pos">
    <div class="cube">
      <div class="left"></div>
      <div class="center"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="shadow"></div>
    </div>
    <div class="cube">
      <div class="left"></div>
      <div class="center"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="shadow"></div>
    </div>
    <div class="cube">
      <div class="left"></div>
      <div class="center"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="shadow"></div>
    </div>
    <div class="cube">
      <div class="left"></div>
      <div class="center"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="shadow"></div>
    </div>
    <div class="cube">
      <div class="left"></div>
      <div class="center"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="shadow"></div>
    </div>
    <div class="cube">
      <div class="left"></div>
      <div class="center"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="shadow"></div>
    </div>
    <div class="cube">
      <div class="left"></div>
      <div class="center"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="shadow"></div>
    </div>
    <div class="cube">
      <div class="left"></div>
      <div class="center"></div>
      <div class="right"></div>
      <div class="bottom"></div>
      <div class="shadow"></div>
    </div>
  </div>
</div>


<style>
.cube:nth-child(1),
.cube:nth-child(1) div {
  z-index: 1;
  animation-delay: 0.08333s;
}

.cube:nth-child(2),
.cube:nth-child(2) div {
  z-index: 2;
  animation-delay: 0.16667s;
}

.cube:nth-child(3),
.cube:nth-child(3) div {
  z-index: 3;
  animation-delay: 0.25s;
}

.cube:nth-child(4),
.cube:nth-child(4) div {
  z-index: 4;
  animation-delay: 0.33333s;
}

.cube:nth-child(5),
.cube:nth-child(5) div {
  z-index: 5;
  animation-delay: 0.41667s;
}

.cube:nth-child(6),
.cube:nth-child(6) div {
  z-index: 6;
  animation-delay: 0.5s;
}

.cube:nth-child(7),
.cube:nth-child(7) div {
  z-index: 7;
  animation-delay: 0.58333s;
}

.cube:nth-child(8),
.cube:nth-child(8) div {
  z-index: 8;
  animation-delay: 0.66667s;
}

html {
  height: 100%;
}

body {
  background-color: #323036;
  position: relative;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  display: table;
}

#vignette {
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 4;
  background-image: -webkit-radial-gradient(50% 50%, ellipse cover, transparent, rgba(0, 0, 0, 0.5));
  background-image: -moz-radial-gradient(50% 50%, ellipse cover, transparent, rgba(0, 0, 0, 0.5));
}

#pos {
  width: 304px;
  margin: 0 auto;
}

#container {
  width: 100%;
  perspective: 2200px;
  padding: 20px 60px;
  position: relative;
  display: table-cell;
  vertical-align: middle;
}

.cube {
  width: 30px;
  height: 150px;
  position: relative;
  margin-right: 8px;
  float: left;
  transform-style: preserve-3d;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  animation: animCube;
  /* Safari and Chrome */
  animation-iteration-count: infinite;
}

.cube div {
  position: absolute;
  display: block;
  width: 30px;
  height: 150px;
}

.cube .center {
  width: 30px;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3), inset 0 1px rgba(255, 255, 255, 0.05);
  animation: animCenter;
  animation-iteration-count: infinite;
}

.cube .bottom {
  width: 30px;
  height: 10px;
  bottom: 0;
  transform: rotateX(90deg);
  transform-origin: center bottom;
  animation: animBottom;
  animation-iteration-count: infinite;
}

.cube .left {
  left: 0;
  transform: rotateY(90deg);
  transform-origin: left center;
  animation: animSide;
  animation-iteration-count: infinite;
}

.cube .right {
  right: 0;
  transform: rotateY(-90deg);
  transform-origin: right center;
  animation: animSide;
  animation-iteration-count: infinite;
}

.cube .left,
.cube .center,
.cube .right,
.cube .bottom,
.cube {
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
}

.left,
.right {
  background-color: #2b2830;
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
}

.center {
  background-color: #2b2830;
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
}

.bottom {
  background-color: #1f1d23;
  background-image: linear-gradient(to top, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
}

@keyframes animCube {
  30% {
    transform: translateZ(150px) translatex(0) translateY(0) rotatex(3deg) rotatey(0deg) rotateZ(0deg);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5), 0 12px 20px 1px rgba(0, 0, 0, 0.5);
  }
  100% {
    transform: translateZ(0px) rotatez(0deg);
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5), 0 0 0 0 transparent;
  }
}
@keyframes animSide {
  30% {
    width: 100px;
    background-color: #1d1c1f;
  }
  95% {
    width: 10px;
  }
}
@keyframes animBottom {
  30% {
    height: 100px;
  }
  95% {
    height: 10px;
  }
}
@keyframes animCenter /* Safari and Chrome */ {
  20% {
    background-color: #6a6371;
    box-shadow: 0 0 3px rgba(255, 255, 255, 0.15), inset 0 1px rgba(255, 255, 255, 0.5);
  }
  65% {
    box-shadow: 0 0 3px rgba(255, 255, 255, 0), inset 0 1px rgba(255, 255, 255, 0.25);
  }
}

</style>

</div>