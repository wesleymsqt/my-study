import React from "react";
import Dados from "./Dados";

export default function Corpo() {
    const frase = `Variavel de teste`;
    const somar = (v1, v2) => {
        return v1 + v2;
    }

    return (
        <>
            <h2>Curso</h2>
            <p>Pagina apenas para teste</p>
            <Dados 
                variavelTeste = {frase}
                somar = {somar}
            />
        
        </>
    );    
}
