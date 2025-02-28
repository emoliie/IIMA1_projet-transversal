const express = require("express");
const GamesController = require("../controllers/GamesController");
const NewslettersController = require("../controllers/NewslettersController")

const router = express.Router();

router.get("/game", GamesController.index); 
router.post("/game", GamesController.store); 
router.get("/game/:id", GamesController.show);
router.put("/game/:id", GamesController.update);
router.delete("/game/:id", GamesController.delete);

router.get("/newsletter", NewslettersController.index); 
router.post("/newsletter", NewslettersController.store); 
router.get("/newsletter/:id", NewslettersController.show);
router.put("/newsletter/:id", NewslettersController.update);
router.delete("/newsletter/:id", NewslettersController.delete);


module.exports = router;
