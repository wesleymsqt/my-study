import React, { useState } from "react";

export default function Notas(props) {
    const [notas, setNotas] = useState({
        "nota1": "",
        "nota2": "",
        "nota3": "",
        "nota4": ""
    });
    const [media, setMedia] = useState(null);
    const [erro, setErro] = useState("");

    const handleSetNotas = (e) => {
        const { name, value } = e.target;
        // Limpa a mensagem de erro ao começar a digitar
        setErro("");

        // Verifica se o valor é um número válido e está no intervalo
        const nota = parseFloat(value);
        if (isNaN(nota) || nota < 0 || nota > 10) {
            setErro("Por favor, insira um valor válido entre 0 e 10.");
        }

        setNotas({ ...notas, [name]: value });
    };

    const calcularMedia = () => {
        // Validação adicional no momento do cálculo
        if (Object.values(notas).some(nota => nota === "" || parseFloat(nota) < 0 || parseFloat(nota) > 10)) {
            setErro("Por favor, preencha todas as notas com valores válidos (0-10) antes de calcular.");
            setMedia(null);
            return;
        }

        let somaNotas = 0;
        somaNotas += parseFloat(notas.nota1);
        somaNotas += parseFloat(notas.nota2);
        somaNotas += parseFloat(notas.nota3);
        somaNotas += parseFloat(notas.nota4);
        setMedia(somaNotas / 4);
        setErro("");
    };

    return (
        <>
            <legend>Informe a nota 1: </legend>
            <input 
                type="number" 
                name="nota1" 
                min="0" 
                max="10" 
                step="0.1" 
                value={notas.nota1} 
                onChange={handleSetNotas} 
            />
            <legend>Informe a nota 2: </legend>
            <input 
                type="number" 
                name="nota2" 
                min="0" 
                max="10" 
                step="0.1" 
                value={notas.nota2} 
                onChange={handleSetNotas} 
            />
            <legend>Informe a nota 3: </legend>
            <input 
                type="number" 
                name="nota3" 
                min="0" 
                max="10" 
                step="0.1" 
                value={notas.nota3} 
                onChange={handleSetNotas} 
            />
            <legend>Informe a nota 4: </legend>
            <input 
                type="number" 
                name="nota4" 
                min="0" 
                max="10" 
                step="0.1" 
                value={notas.nota4} 
                onChange={handleSetNotas} 
            /> <br />

            <button onClick={calcularMedia}>Calcular Média</button>

            {erro && (
                <div style={{ color: "red", marginTop: "10px" }}>
                    <p>{erro}</p>
                </div>
            )}

            {media !== null && !erro && (
                <div style={{ marginTop: "10px" }}>
                    <p>A média das notas é: {media.toFixed(2)}</p>
                </div>
            )}
        </>
    );
}