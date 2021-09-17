navigator.mediaDevices.getUserMedia({audio:false, video:true}).then((stream)=>{
	console.log(stream);
	let camaraActiva=document.getElementById('videoCamara')
	camaraActiva.srcObject=stream
	camaraActiva.onloadedmetadata=(ev)=>camaraActiva.play()	
}).catch((err)=>console.log(err))