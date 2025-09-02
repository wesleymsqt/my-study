import React, {useState} from "react";

export default function Formulario() {
  const [nome, setNome] = useState("");
  const handleChange = (e) => {
    setNome(e.target.value);
  };

  const [carro, setCarro] = useState("");

  const [form, setForm] = useState({"curso": "", "ano": ""});
  const handleFormChange = (e) => {
    if (e.target.getAttribute("curso") === "fcurso") {
      setForm({"curso": e.target.value, "ano": form.ano});
    } else if (e.target.getAttribute("ano") === "fano") {
      setForm({"curso": form.curso, "ano": e.target.value});
    } 
  }

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

      <label>Curso: </label>
      <input type="text" name="fcurso" value={form.curso} onChange={(e) => handleFormChange(e)} />
      <label>Ano: </label>
      <input type="text" name="fano" value={form.ano} onChange={(e)=>handleFormChange(e)} />

      <p>Curso: {form.curso}</p>
      <p>Ano: {form.ano}</p>

    </>
  );
}
