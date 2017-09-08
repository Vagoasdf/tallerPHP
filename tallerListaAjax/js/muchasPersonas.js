
function llenarTabla(persona){
	var tabla=document.getElementById("tablaPersonas");
	var tr=document.createElement("tr");
	
	var txt=document.createTextNode(persona["nombre"]);
	var nombre=document.createElement("td");
	nombre.appendChild(txt);
	tr.appendChild(nombre);

	var apellido=document.createElement("td");
	var txt=document.createTextNode(persona["apellido"]);
	apellido.appendChild(txt);
	tr.appendChild(apellido);

	var edad=document.createElement("td");
	var txt=document.createTextNode(persona["edad"]);
	edad.appendChild(txt);
	tr.appendChild(edad);

	var fono=document.createElement("td");
	var txt=document.createTextNode(persona["fono"]);
	fono.appendChild(txt);
	tr.appendChild(fono);

	var correo=document.createElement("td");
	var txt=document.createTextNode(persona["correo"]);
	correo.appendChild(txt);
	tr.appendChild(correo);

	tabla.appendChild(tr);


}

var personaA={
	nombre:"Carlos",
	apellido:"Manterola",
	edad:"22",
	fono:"95667876",
	correo:"CManterola@gmail.com"
}
var personaB={
	nombre:"Andres",
	apellido:"Donaire",
	edad:"25",
	fono:"95838239",
	correo:"Donako_Dada@gmail.com"
}
var personaC={
	nombre:"Sebastian",
	apellido:"Riquelme",
	edad:"20",
	fono:"93345876",
	correo:"sefue.minimi@gmail.com"
}
var personaD={
	nombre:"Dante",
	apellido:"Cifuentes",
	edad:"27",
	fono:"95644876",
	correo:"Cidantedifunta@gmail.com"
}
var personaE={
	nombre:"Marta",
	apellido:"Gonzales",
	edad:"27",
	fono:"95667876",
	correo:"GonzMart@gmail.com"
}

var listaPersonas=[personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE,
personaA,personaB,personaC,personaD,personaE,personaA,personaB,personaC,personaD,personaE
];


