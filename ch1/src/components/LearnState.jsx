import { useState } from "react"
const LearnState = () => {
    const [num, setNum] = useState(5)
    console.log("Number:", num);
    const handleNum = () => {
        setNum(9)
    }
   return (
     <>
        <h1> Number {num}</h1>
        <button onClick={handleNum}>Change Number</button>
     </>
   )
 }
 
 export default LearnState
 