const LearnEvent = () => {
    const handleClick1 = (e) => {
        e.preventDefault()
        console.log("Button Clicked 1")
    }
    const handleClick2 = (myid) => {
        
        console.log("Button Clicked 2", myid)
    }

    return (
    <>

      <button onClick={handleClick1}>Click 1</button>

      <button onClick={(e) => handleClick2("MyID")}>Click 2</button>

    </>
  )
}

export default LearnEvent
