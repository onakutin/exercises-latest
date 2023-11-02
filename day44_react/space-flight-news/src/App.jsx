import { BrowserRouter, Route, Routes } from "react-router-dom";
import "./App.css";
import Homepage from "./Homepage";
import Article from "./Article";
import PageContext from "./PageContext";
import { useState } from "react";

function App() {
	const [page, setPage] = useState(0);

	return (
		<>
			<PageContext.Provider value={{ page, setPage }}>
				<BrowserRouter>
					<Routes>
						<Route path="/" element={<Homepage />} />
						<Route path="/article/:id" element={<Article />} />
					</Routes>
				</BrowserRouter>
			</PageContext.Provider>
		</>
	);
}

export default App;
