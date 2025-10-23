const LearnLiftingStateUp = (props) => {
    const handleClick1 = (e) => {
        e.preventDefault()
        let dt = "I am Child Data"
        props.myClick(dt)
    }
    
  return (
     <> 
        <button onClick={handleClick1}>Click 1</button>
     </>
  )
}

export default LearnLiftingStateUp



