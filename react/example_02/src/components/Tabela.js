import React, {useState} from "react";

const carros = [
    {categoria: "Esportivos", preco:"10000", modelo: "Mustang"},
    {categoria: "Esportivos", preco:"20000", modelo: "Camaro"},
    {categoria: "Esportivos", preco:"30000", modelo: "Corvette"},
    {categoria: "Luxo", preco:"40000", modelo: "Bentley"},
];

const linhas=(cat) => {
    const li=[];

    carros.forEach((carro) => { 
        if(carro.categoria.toUpperCase() === cat.toUpperCase() || cat.toUpperCase() === ""){
            li.push(
                <tr>
                    <td>{carro.categoria}</td>
                    <td>{carro.modelo}</td>
                    <td>{carro.preco}</td>
                </tr>
            );
        }
    });

    return li;
}

const TabelaCarros = (cat) => {
    return (
        <table border="1" width="400px">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Modelo</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                {linhas(cat)}
            </tbody>
        </table>
    );
}

const pesquisaCategoria = (cat, setCat) => {
    return (
        <label>Pesquisar Categoria:</label>,
        <input type="text" value={cat} onChange={(e) => setCat(e.target.value)} />
    );
}

export default function Tabela() {
    const [categoria, setCategoria] = useState("");

    return (
        <>
            {pesquisaCategoria(categoria, setCategoria)} <br />
            {TabelaCarros(categoria)}
        </>
    );
}
