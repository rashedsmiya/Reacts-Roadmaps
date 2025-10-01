 import { useState } from 'react';
import reactLogo from './assets/react.svg';
import viteLogo from '/vite.svg';
import './App.css';
import User from './User';

function App() {
  const [counter, setCounter] = useState(0);
  return (
    <>
      <p>Counter Vai :{counter}</p>
      <User />
      <button onClick={() => setCounter(counter + 1)}>Increment Counter Vai</button>
    </>
  );
}

export default App;


