
const quiz = document.getElementById('quiz')
const texts = Array.from(document.getElementsByClassName('quiz-text'))
const counterText = document.getElementById('counter')
const scoreText = document.getElementById('score')

let allQuestions = []
let currentQuestion = []
let answer = false
let counter = 0
const BONUS = 1;
const questions = [
        {
            question:"1.Input stream класы байт ағындарын басқаратын барлық сыныптар үшін негізгі болып табылады. Оныңнегізгі əдістерінқарастырыңыз:",
            choice1: "int read()",
            choice2: "void close ()",
            choice3: "void flush",
            choice4: "flush ()",
            answer: 1
        },
        {
            question:"2.Жалпыланған конструкторлар қолданылған жолды көрсетіңіз .",
            choice1: "class mybook{ private String id; private int sum; mybook(T id, int sum){ this.id = id.toString(); this.sum = sum; }",
            choice2: "class Account { private T id; private int sum; ",
            choice3: "class DepositAccoun t extends Account{",
            choice4: "Account acc2 = new Account(2345, 5000); Integer acc2Id = acc2.getId(); System.out.println(acc2Id);",
            answer:1
        },
        {
            question:"3. This кілт сөзі...",
            choice1: "кілттік сөз арқылы айнымалыға жүгінеді енгізілген byte санын оқиды",
            choice2: "ондабұл класс үшінпараметрлерсіз конструктор автоматты түрде жасалады",
            choice3: "Жынтәріздес",
            choice4: "енгізілген byte санын оқиды",
            answer:1
        },
        {
            question:"4. Конструкторлар түрлері",
            choice1: "параметрлі, параметрсіз",
            choice2: "енгізілген float санын оқиды",
            choice3: "енгізілген byte санын оқиды ",
            choice4: "тәуелсіз",
            answer:2
        },
        {
            question:"5.Классты кодта қалай жариялауға болады ?",
            choice1: "class Book {} class MyClass {} ",
            choice2: "MyClass extends class {} ",
            choice3: "new class MyClass {}",
            choice4:"new class main",
            answer:4,

        },
        {
            question:"6. Бұлкод: Exception java.lang.ArrayIndexOutOfBoundsException: 4 қатесін не себепті шығарады. int[] a = new int[] {1,2,3,4,5}; int[] b = new int[a.length] ; b[3]=3;",
            choice1: "Қате массивтің шекарасынан асып кетуді білдіреді",
            choice2: "тең болады",
            choice3: "Қате жадтың толып кетуін білдіреді.",
            choice4: "Барлығы дұрыс",
            answer:1
        },
        {
            question:"7. Консолға шығаратын нəтижені көрсетіңіз. int a = 18; int b = a++; System.out.println(a); System.out.println(b);",
            choice1: " 19,18",
            choice2: "18,19 ",
            choice3: "19,19",
            choice4: "18,18 ",
            answer:1
        },
        {
            question:"8.Келесі жолға ауыстыру командасы",
            choice1: "String",
            choice2: "String text",
            choice3: "short",
            choice4: ". \n ",
            answer:4
        },
        {
            question:"9.Консолға шығаратын нəтижені көрсетіңіз. int a = 33; int b = 5; int c = a % b;",
            choice1: "1",
            choice2: "3",
            choice3: "5",
            choice4: "2",
            answer:2
        },
        {
            question:"10.Конструктор түрін анықтаңыз .Person(String n) { name = n; age = 18; }",
            choice1: "Бірпараметрлі",
            choice2: "Екіпараметрлі",
            choice3: "Боспараметрлі",
            choice4: "Төртпараметрлі",
            answer:1
        },
        {
            question:"11.Консолға шығаратын нəтижені көрсетіңіз. Person(String n) { name = n; age = 18; }",
            choice1: "Name: Sam Age: 18",
            choice2: "Name: Tom Age: 10,",
            choice3: "Name: Tom Age: 1",
            choice4: "Name: SamAge: 0",
            answer:1
        },
        {
            question:" 12.Пернетақтадан енгізілген бүтін санды қайтарады",
            choice1: "Scanner",
            choice2: "util",
            choice3: "in.nextInt()",
            choice4: "%f%f",
            answer:3
        },
        {
            question:"13.true немесе false мəнді сақтайды",
            choice1: "short",
            choice2: "boolean",
            choice3: "byte ",
            choice4: "String ",
            answer:2
        },
        {
            question:"14.class Account{ } class Transaction { } қандай амал сипатталған?",
            choice1:"жалпылаудың шектеулері",
            choice2: "динамика ",
            choice3: "статика",
            choice4: "мұрагерлік",
            answer:1
        },
        {
            question:"15.Java тіліндегі класс дегеніміз не?",
            choice1: "Ықтимал айнымалы атауларының бірі ғана",
            choice2: "Java тіліндегі объектілі-бағытталған программалаудың негізгі элементі.",
            choice3: "Бағдарламаның күрделілік деңгейі.",
            choice4: "Мұндай ұғым тек C++ тіліндебар, Java тілінде мұндай ұғым жоқ.",
            answer:2
        },
        {
            question:"16.extendsкілтсөзінеанықтамаберіңіз.",
            choice1: ".бірсыныптыекіншісіненмұрагердепжариялауүшінмұрагеркласыныңатауынанкейінқолданукерек, соданкейіннегізгісыныптыңатышығады",
            choice2: "ашықмодификаторменжарияланғанөрістер",
            choice3: "алдыналаанықталмағанмодификатор",
            choice4: "ашықсыныпнемесесыныпмүшесі",
            answer:1
        },
        {
            question:"17. Scanner класындағыnext() əдісі",
            choice1: "енгізілген Double сандыоқиды",
            choice2: "енгізілгенIntсаныноқиды",
            choice3: "енгізілмегенIntсаныноқиды",
            choice4: "барлықенгізілгенжолдыоқиды",
            answer:4
        },
        {
            question:"18. Биік тау басындағытуристтержұмыртқаны 100℃-тақайнатаалама? ",
            choice1: "жұмырқаныңсанынабайланысты",
            choice2: "жүмыртқатолықкайнады",
            choice3: "жұмыртқанытолыққайнатумүмкінемес",
            choice4: "жұмыртқамүлдемқайнамайды",
            answer:3
        },
        {
            question:"19.importjava.util.*; коды қандайіс-əрекетжасайды?  ",
            choice1: "java.utilпакетіндегібарлықсыныптыимпорттау",
            choice2: "classjava.util",
            choice3: " шарттыоператор ",
            choice4: "бәрі дұрыс ",
            answer:1
        },
        {
            question:"20. Inputstreamкласы байт ағындарынбасқаратынбарлықсыныптарүшіннегізгіболыптабылады. Оныңнегізгі əдістерінқарастырыңыз:",
            choice1: "void close()",
            choice2: "open ()",
            choice3: "void flush",
            choice4: "log",
            answer:1
        },
    ]
startQuiz = () =>{
    counter = 0
    score = 0
    allQuestions = [...questions]
    MAXI = allQuestions.length
    getNewQuiz()
}
getNewQuiz = () =>{
    if(allQuestions.length == 0 || counter >= MAXI){
        alert(`Правильных ответов из 20 вопросов: ${score}`)

        window.location.assign("http://a1nurdad/admin/subject/")
    }
    counter++
    counterText.innerText = `${counter-1}/${MAXI}`
    let index = Math.floor(Math.random()*allQuestions.length)
    currentQuestion = allQuestions[index]
    quiz.innerText = currentQuestion.question
    texts.forEach(text=>{
        const number = text.dataset['number']
        text.innerText = currentQuestion['choice'+number]
    })
    allQuestions.splice(index, 1)
    answer = true
}
texts.forEach(text=>{
    text.addEventListener('click', (e)=>{
        if(!answer) return
        answer = false
        selectedChoice = e.target
        selectedAnswer = selectedChoice.dataset["number"]
        // console.log(selectedAnswer==currentQuestion.answer)
        let classToApply = "incorrect"
        if(selectedAnswer == currentQuestion.answer){
            classToApply = "correct"
        }
        if(classToApply == "correct"){
            incrementScore(BONUS)
        }
        selectedChoice.parentElement.classList.add(classToApply)
        setTimeout(()=>{
            selectedChoice.parentElement.classList.remove(classToApply)
        },1000)
        getNewQuiz()
    })
})
incrementScore = (num) =>{
    score+=num
    scoreText.innerText = score
}
startQuiz();



