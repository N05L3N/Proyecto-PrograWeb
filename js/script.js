var misImagenes= new Array(4)
				  misImagenes [0]= "noticiasImg/img1.jpg";
				  misImagenes [1]= "noticiasImg/img2.jpg";
				  misImagenes [2]= "noticiasImg/img3.jpg";
				  misImagenes [3]= "noticiasImg/img4.jpg";
				  misImagenes [4]= "noticiasImg/img5.jpg";
				var i = 0;
				//funcion de carga de la primera imagen

			var myVar=setInterval(function () {siguiente()}, 8000);

				
				function cargarImagen(){
					
				  document.img1.src = misImagenes[i];
				}

				function siguiente(){
					if(i<4)
					{
						i+=1;
						document.img1.src = misImagenes[i];
					}
					else if(i==4)
					{
						i=0;
						document.img1.src = misImagenes[i];
					}

				}

				function anterior(){
					if(i==0)
					{
						i+=1;
						document.img1.src = misImagenes[i];
					}
					else if(i<4)
					{
						i+=1;
						document.img1.src = misImagenes[i];
					}
					else if(i==4)
					{
						i=0;
						document.img1.src = misImagenes[i];
					}

				}

				window.onload=cargarImagen;
