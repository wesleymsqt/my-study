import React from "react";

export default function Formulario() {
  const [nome, setNome] = React.useState("");
  const handleChange = (e) => {
    setNome(e.target.value);
  };

  const [carro, setCarro] = React.useState("");

  return (  
    <>
      <label>Nome:</label>
      {/* <input type="text" value={nome} onChange={(e) => setNome(e.target.value)} /> */}
      <input type="text" value={nome} onChange={(e) => handleChange(e)} />
      <p>Nome é: {nome}</p>

      <label> Selecione um carro: </label>
      <select value={carro} onChange={(e) => setCarro(e.target.value)}>
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
      </select>
      <p>Carro selecionado é: {carro}</p>

      
    </>
  );
}
