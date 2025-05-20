// Importando os componentes
import { Heading } from "./components/Heading";
import { Container } from "./components/Container";
import { Logo } from "./components/Logo";
import { Menu } from "./components/Menu";

import "./styles/global.css";
import "./styles/theme.css";
import { CountDown } from "./components/CountDown";

// Aqui estamos importando minha function direto
export function App() {
  console.log("Teste");
  // Retorna apenas um elemento JSX, por isso utilizo dentro de uma div ou <></>
  return (
    <>
      <Container>
        <Heading>
          <Logo />
        </Heading>
      </Container>

      {/* 
      FAZ A MESMA COISA QUE O CÓDIGO ACIMA
      <div className="container">
        <div className="content">
          <section>Logo</section>
        </div>
      </div> 
      */}

      <Container>
        <Menu />
      </Container>
      <Container>
        <CountDown>
          
        </CountDown>
      </Container>
    </>
  );
}

// export { App }; || export default App;
