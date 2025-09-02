import React from "react";

export default function FuncaoMap() {
  const numeros = [1, 2, 3, 4, 5];
  const listItems = numeros.map((n, i) => <li key={i}>{n}</li>);

  return <>
    <ul>{listItems}</ul>
  </>;
}
