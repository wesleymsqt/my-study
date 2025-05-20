import styles from "./styles.module.css";

export function CountDown() {
  // Utilizando className
  return(
    <div className={styles.container}>
      00:00:00
    </div>
  );
}
