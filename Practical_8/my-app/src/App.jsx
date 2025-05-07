import { useState } from 'react'
import './App.css'

function App() {
  const [count, setCount] = useState(0)

  return (
    <div className="container">
      <div className="card">
        <h1 className="title">Practical No. 8: Basics of React</h1>
        <div className="content">
          <p className="description">Click the button below to increase the count:</p>
          <button 
            onClick={() => setCount(count + 1)} 
            className="button"
          >
            Count is {count}
          </button>
        </div>
 
      </div>
    </div>
  )
}

export default App
