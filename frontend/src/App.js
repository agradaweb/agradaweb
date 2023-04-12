import './App.css';

function App() {
  return (
      <div className="bg-gray-200 h-screen flex flex-col justify-center items-center">
      <h1 className="text-4xl font-bold text-gray-800 mb-8">¡Bienvenidos a mi página web!</h1>
      <p className="text-lg text-gray-700 mb-4">Aquí podrás encontrar información sobre mí y mis proyectos.</p>
      <a href="/inicio" className="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">¡Contáctame!</a>
    </div>
  );
}

export default App;
