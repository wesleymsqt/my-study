import React from "react";

export default function Numero(props) {
  return (
    <>
      <p> Valor do num em Numero: {props.num} </p>
      <button onClick={() => props.setNum(props.num + 1)}>Incrementar</button>
    </>
  );
}
