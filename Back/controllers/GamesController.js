const prisma = require("../config/prisma");

class GamesController {
  async index(req, res) {
    try {
      const games = await prisma.game.findMany({
        take: 5,
        orderBy: [
          {
            score: "desc",
          },
        ],
      });
      return res.status(200).json(games);
    } catch (e) {
      return res.status(500).json({ message: e.message });
    }
  }

  async store(req, res) {
    const body = req.body;
    try {
      const game = await prisma.game.create({
        data: {
          player: body.player,
          score: body.score,
        },
      });

      return res.status(201).json(game);
    } catch (e) {
      console.log(e);
      return res.status(500).json({ message: e.message });
    }
  }

  async show(req, res) {
    try {
      const id = req.params.id;
      const game = await prisma.game.findUnique({
        where: {
          id: Number(id),
        },
      });

      if (!game) return res.status(404).json({ message: "Game not found" });

      return res.status(200).json(game);
    } catch (e) {
      return res.status(500).json({ message: e.message });
    }
  }

  async update(req, res) {
    try {
      const id = req.params.id;
      const body = req.body;
      const game = await prisma.game.findUnique({
        where: {
          id: Number(id),
        },
      });

      if (!game) {
        return res.status(404).json({ message: "Game not found" });
      }

      const updatedgame = await prisma.game.update({
        where: { id: Number(id) },
        data: body,
      });

      return res.status(200).json(updatedgame);
    } catch (e) {
      return res.status(500).json({ message: e.message });
    }
  }

  async delete(req, res) {
    try {
      const id = req.params.id;
      const game = await prisma.game.findUnique({
        where: {
          id: Number(id),
        },
      });

      if (!game) return res.status(404).json({ message: "Game not found" });

      await prisma.game.delete({
        where: {
          id: Number(id),
        },
      });

      return res.status(204).json();
    } catch (e) {
      return res.status(500).json({ message: e.message });
    }
  }
}

module.exports = new GamesController();
