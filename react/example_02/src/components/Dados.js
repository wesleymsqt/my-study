import React from "react";

export default function Dados(props) {
    let n1 = 5;
    let n2 = 2;

    return (
        <>
            <p>Temos: {props.variavelTeste}</p>
            <p>{`A soma de ${n1} e ${n2} é: ${props.somar(n1, n2)}`}</p>
        </>
    );
}
