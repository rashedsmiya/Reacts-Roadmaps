 
const LearnEvent = () => {

  const handleClick = (e) => {
    e.preventDefault();
    console.log("Button clicked 1");
  }
  
  const handleClick2 = (myid) => { 
    console.log("Button clicked 2", myid);
  }

  return (
     
    <>
      <button onClick={handleClick}>Click 1</button>

      <button onClick={(e) => handleClick2("myid")}>Click 2</button>
    </>
      
  )
}

export default LearnEvent
