import React from "react";

export default function Cumprimento() {

  const saudacao = () => {
    const hora = new Date().getHours();
    // const hora = 1;

    if (hora >= 0 && hora < 13) {
      return <h1>Bom dia!</h1>;
    } else if (hora >= 12 && hora < 18) {
      return <h1>Boa tarde!</h1>;
    } else {
      return <h1>Boa noite!</h1>;
    }
  };

  return( 
    <> 
        {saudacao()}
    </>
  );
}
