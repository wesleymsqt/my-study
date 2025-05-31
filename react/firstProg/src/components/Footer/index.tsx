import styles from "./styles.module.css";

export function Footer() {
  return (
  <footer className={styles.footer}>
    <a href="">Feito por Wesley Mesquita</a>
    <a href="">Chronos Pomodoro &copy;{new Date().getFullYear()} </a>
  </footer>
  
);
}
